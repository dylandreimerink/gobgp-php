<?php
/**
 * Created by PhpStorm.
 * User: caveman
 * Date: 11/3/17
 * Time: 9:27 PM
 */

namespace Gobgp\Flowspec;

use Gobgp\InvalidEnumValue;

class FlowspecMatchNumericPart implements FlowspecMatchPartInterface
{
	/**
	 * @var bool
	 */
	private $listEnd = false;

	/**
	 * @var bool
	 */
	private $and = false;

	/**
	 * @var int
	 */
	private $length = 1;

	/**
	 * @var FlowspecMatchNumericOperator
	 */
	private $operator;

	/**
	 * @var int
	 */
	private $value;

	public function __construct(
		int $value,
		int $length = 1,
		FlowspecMatchNumericOperator $operator = null,
		$and = false,
		$listEnd = false
	)
	{
		$this->setLength($length);
		$this->setValue($value);

		if (is_null($operator)) {
			$this->operator = FlowspecMatchNumericOperator::get(FlowspecMatchNumericOperator::notEqualTo);
		} else {
			$this->setOperator($operator);
		}

		$this->setAnd($and);
		$this->setListEnd($listEnd);
	}

	/**
	 * @return bool
	 */
	public function isListEnd(): bool
	{
		return $this->listEnd;
	}

	/**
	 * @param bool $listEnd
	 */
	public function setListEnd(bool $listEnd)
	{
		$this->listEnd = $listEnd;

		return $this;
	}

	/**
	 * @return bool
	 */
	public function isAnd(): bool
	{
		return $this->and;
	}

	/**
	 * @param bool $and
	 */
	public function setAnd(bool $and)
	{
		$this->and = $and;

		return $this;
	}

	/**
	 * @return int
	 */
	public function getLength(): int
	{
		return $this->length;
	}

	/**
	 * @param int $length
	 */
	public function setLength(int $length)
	{
		if ($length < 1 || $length > 2) {
			throw new \Exception("FlowspecMatchNumericPart length can only be 1 or 2");
		}

		$this->length = $length;

		return $this;
	}

	/**
	 * @return FlowspecMatchNumericOperator
	 */
	public function getOperator(): FlowspecMatchNumericOperator
	{
		return $this->operator;
	}

	/**
	 * @param FlowspecMatchNumericOperator $operator
	 */
	public function setOperator(FlowspecMatchNumericOperator $operator)
	{
		$this->operator = $operator;

		return $this;
	}

	/**
	 * @return int
	 */
	public function getValue(): int
	{
		return $this->value;
	}

	/**
	 * @param int $value
	 */
	public function setValue($value)
	{
		if ($this->length == 1) {
			if ($value > 0xff || $value < 0x00) {
				throw new \Exception("Value has to be between 0x00 and 0xff if length = 1");
			}
		} else {
			if ($value > 0xffff || $value < 0x0000) {
				throw new \Exception("Value has to be between 0x0000 and 0xffff if length = 2");
			}
		}
		$this->value = $value;

		return $this;
	}

	public function toBytes()
	{
		$bytes = [$this->operator->getVal()];

		if ($this->listEnd) {
			$bytes[0] |= 1 << 7;
		}

		if ($this->and) {
			$bytes[0] |= 1 << 6;
		}

		if ($this->length == 1) {
			$bytes[1] = $this->value;
		} else {
			$bytes[0] |= 1 << 4;

			$bytes[1] = ($this->value & 0xff00) >> 8;
			$bytes[2] = $this->value & 0x00ff;
		}

		return $bytes;
	}

	public static function fromBytes(array $bytes)
	{
		if (count($bytes) < 2) {
			throw new \Exception("Need at least 2 bytes for a valid match numeric part");
		}

		$op = $bytes[0];

		$endOfList  = (($op & 0x80) >> 7) == 1;
		$and        = (($op & 0x40) >> 6) == 1;
		$length     = (($op & 0x10) >> 4) == 1 ? 2 : 1;

		try {
			$numOp = FlowspecMatchNumericOperator::get($op & 0x07);
		} catch (InvalidEnumValue $e) {
			throw new \Exception("Invalid numeric operator");
		}

		if ($length == 2) {
			if (count($bytes) < 3) {
				throw new \Exception("Length = 2 but only one value byte was found");
			}

			$value = $bytes[1] << 8 | $bytes[2];
		} else {
			$value = $bytes[1];
		}

		return new FlowspecMatchNumericPart($value, $length, $numOp, $and, $endOfList);
	}

}