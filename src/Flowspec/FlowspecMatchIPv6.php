<?php
/**
 * Created by PhpStorm.
 * User: caveman
 * Date: 11/4/17
 * Time: 8:15 PM
 */

namespace Gobgp\Flowspec;


use Gobgpapi\Path;
use Leth\IPAddress\IPv6\NetworkAddress;

class FlowspecMatchIPv6 extends FlowspecMatch
{
	private $range;

	public function __construct(FlowspecMatchType $type, NetworkAddress $range)
	{
		$this->setRange($range);
		parent::__construct($type);
	}

	public function setType(FlowspecMatchType $type)
	{
		if ($type->getVal() == FlowspecMatchType::SRC_PREFIX
			|| $type->getVal() == FlowspecMatchType::DST_PREFIX
		) {
			parent::setType($type);
		} else {
			throw new \Exception("Match type is not a IPv6 match type");
		}
	}

	/**
	 * @return NetworkAddress
	 */
	public function getRange(): NetworkAddress
	{
		return $this->range;
	}

	/**
	 * @param NetworkAddress $range
	 */
	public function setRange(NetworkAddress $range)
	{
		$this->range = $range;
	}

	public function toBytes(): array
	{
		$prefix = $this->getRange()->get_cidr();
		$prefixLength = ceil($prefix / 8);

		$bytes = [$this->getType()->getVal(), $prefix];

		for ($i = 0; $i <= $prefixLength; $i++) {
			$bytes[2 + $i] = $this->getRange()->get_address()->get_octet($i + 1);
		}

		return $bytes;
	}

	public function byteCount(): int
	{
		return count($this->toBytes());
	}

	public static function fromBytes(array $bytes)
	{
		if (count($bytes) < 3) {
			throw new \Exception("Missing bytes, need at least 4 bytes to create a IPv6 match");
		}

		$prefixLength = $bytes[1];  //This is the length in bits

		$prefixByteLength = ceil($prefixLength / 8);

		if (count($bytes) < 2 + $prefixByteLength) {
			throw new \Exception("Missing bytes, need at least " . 2 + $prefixByteLength .
				" bytes for a IPv6 match with a prefix of $prefixLength");
		}

		//Init a 16 byte size address
		$addressOctlets = [0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0];

		for ($i = 0; $i <= $prefixByteLength; $i++) {
			$addressOctlets[$i + 1] = $bytes[2 + $i];
		}

		$addressStringParts = [];

		for ($i = 0; $i < 16; $i += 2) {
			$addressStringParts[] = dechex($addressOctlets[$i] << 8 | $addressOctlets[$i + 1]);
		}

		$addressString = implode(":", $addressStringParts);

		$address = NetworkAddress::factory($addressString, $prefixLength);

		return new FlowspecMatchIPv6(FlowspecMatchType::get($bytes[0]), $address);
	}
}