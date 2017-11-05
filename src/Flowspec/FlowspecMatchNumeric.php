<?php
/**
 * Created by PhpStorm.
 * User: caveman
 * Date: 11/3/17
 * Time: 11:40 PM
 */

namespace Gobgp\Flowspec;


use Gobgp\InvalidEnumValue;

class FlowspecMatchNumeric extends FlowspecMatch
{

	/*
	 * @var parts FlowspecMatchNumericPartInterface[]
	 */
	private $parts = [];

	/*
	 * @return parts FlowspecMatchNumericPartInterface[]
	 */
	public function getParts(): array
	{
		return $this->parts;
	}

	public function addPart(FlowspecMatchPartInterface $part)
	{
		if (count($this->parts) == 0) {
			if ($part->isAnd()) {
				throw new \Exception("First numeric match part can't have 'and' flag set");
			}
		}

		if (in_array($this->getType()->getVal(), [
			FlowspecMatchType::IP_PROTO,
			FlowspecMatchType::ICMP_TYPE,
			FlowspecMatchType::ICMP_CODE
		])) {
			if ($part->getLength() != 1) {
				throw new \Exception("Numeric match part of type IP_PROTO, ICMP_TYPE and ICMP_CODE can only be 1 byte long");
			}
		}

		$this->parts[] = $part;
	}

	public function removePart(int $index)
	{
		if (isset($this->parts[$index])) {
			unset($this->parts[$index]);
		}
	}

	private function prepareParts()
	{

		if (count($this->parts) == 0) {
			throw new \Exception("Need at least one numeric match part in order to generate bytes");
		}

		foreach ($this->parts as $part) {
			$part->setListEnd(false);
		}

		$this->parts[count($this->parts) - 1]->setListEnd(true);
	}

	public function setType(FlowspecMatchType $type)
	{
		if (!in_array($type->getVal(), [
			FlowspecMatchType::IP_PROTO,
			FlowspecMatchType::PORT,
			FlowspecMatchType::DST_PORT,
			FlowspecMatchType::SRC_PORT,
			FlowspecMatchType::ICMP_TYPE,
			FlowspecMatchType::ICMP_CODE,
			FlowspecMatchType::PKT_LEN,
			FlowspecMatchType::DSCP,
			FlowspecMatchType::TCP_FLAG,
			FlowspecMatchType::FRAGMENT
		])) {
			throw new \Exception("Match type is not a numeric match type");
		}

		parent::setType($type);
	}

	public function toBytes(): array
	{
		$this->prepareParts();

		$bytes = [$this->getType()->getVal()];

		foreach ($this->parts as $part) {
			array_merge($bytes, $part->toBytes());
		}

		return $bytes;
	}

	public function byteCount(): int
	{
		$this->prepareParts();

		$count = 1;

		foreach ($this->parts as $part) {
			$count += 1 + $part->getLength();
		}

		return $count;
	}

	public static function fromBytes(array $bytes)
	{
		try {
			$numMatch = new FlowspecMatchNumeric(FlowspecMatchType::get($bytes[0]));

			$bytes = array_slice($bytes, 1);
		} catch (InvalidEnumValue $e) {
			throw new \Exception("Invalid match type");
		}

		while (count($bytes) > 0) {
			switch ($numMatch->getType()->getVal()) {
				case FlowspecMatchType::TCP_FLAG:
					$newPart = FlowspecMatchTCPFlagPart::fromBytes($bytes);
				break;
				case FlowspecMatchType::FRAGMENT:
					//TODO: ADD fragment match part
					break;
				case FlowspecMatchType::DSCP:
					//TODO Add DSCP match part->setUrg((($value & 0x20) >> 5) == 1)
					break;
				default:
					$newPart = FlowspecMatchNumericPart::fromBytes($bytes);
			}
			$numMatch->addPart($newPart);

			$bytes = array_slice($bytes, 1 + $newPart->getLength());

			if ($newPart->isListEnd()) {
				break;
			}
		}

		return $numMatch;
	}
}