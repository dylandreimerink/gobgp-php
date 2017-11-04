<?php
/**
 * Created by PhpStorm.
 * User: caveman
 * Date: 11/4/17
 * Time: 7:28 PM
 */

namespace Gobgp\Flowspec;


use Leth\IPAddress\IPv4\NetworkAddress;

class FlowspecMatchIPv4 extends FlowspecMatch
{
	/*
	 * @var range NetworkAddress
	 */
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
			throw new \Exception("Match type is not a IPv4 match type");
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
		$address = $this->getRange()->get_address();

		$bytes = [$this->getType()->getVal(), $prefix];

		if ($prefix <= 8) {
			$bytes[2] = $address->get_octet(0);
		} elseif ($prefix <= 16) {
			$bytes[2] = $address->get_octet(0);
			$bytes[3] = $address->get_octet(1);
		} elseif ($prefix <= 24) {
			$bytes[2] = $address->get_octet(0);
			$bytes[3] = $address->get_octet(1);
			$bytes[4] = $address->get_octet(2);
		} else {
			$bytes[2] = $address->get_octet(0);
			$bytes[3] = $address->get_octet(1);
			$bytes[4] = $address->get_octet(2);
			$bytes[5] = $address->get_octet(3);
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
			throw new \Exception("Missing bytes, need at least 3 bytes to make a IPv4 match");
		}

		$prefix = $bytes[1];

		if ($prefix < 0 || $prefix > 32) {
			throw new \Exception("Invalid prefix must be between 0 and 32 for IPv4");
		}

		$count = ceil($prefix / 8);

		if (count($bytes) < 2 + $count) {
			throw new \Exception("Missing bytes, address must have $count bytes for prefix of $prefix");
		}

		$addressParts = [0, 0, 0, 0];

		for ($i = 0; $i < $count; $i++) {
			$addressParts[$i] = $bytes[2 + $i];
		}

		$addressString = implode(".", $addressParts);

		$address = NetworkAddress::factory($addressString, $prefix);

		return new FlowspecMatchIPv4(FlowspecMatchType::get($bytes[0]), $address);
	}
}