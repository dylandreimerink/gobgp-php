<?php
/**
 * Created by PhpStorm.
 * User: caveman
 * Date: 11/5/17
 * Time: 5:15 PM
 */

namespace Gobgp\Flowspec;


class FlowspecMatchTCPFlagPart implements FlowspecMatchPartInterface
{
	/**
	 * @var bool
	 */
	private $listEnd = false;

	/**
	 * @var bool
	 */
	private $and = false;

	/*
	 * @var bool
	 */
	private $not = false;

	/*
	 * @var bool
	 */
	private $bitwise_match = false;

	/**
	 * @var int
	 */
	private $length = 1;

	/**
	 * @var int
	 */
	private $flags = 0;

	public function __construct()
	{
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
	 * @return bool
	 */
	public function isNot(): bool
	{
		return $this->not;
	}

	/**
	 * @param bool $and
	 */
	public function setNot(bool $not)
	{
		$this->not = $not;

		return $this;
	}

	/**
	 * @return bool
	 */
	public function isMatchBitwise(): bool
	{
		return $this->not;
	}

	/**
	 * @param bool $and
	 */
	public function setMatchBitwise(bool $match)
	{
		$this->bitwise_match = $match;

		return $this;
	}

	/**
	 * @return int
	 */
	public function getLength(): int
	{
		return 1;
	}

	/**
	 * @param int $length
	 */
	public function setLength(int $length)
	{
		if ($length != 1) {
			throw new \Exception("FlowspecMatchTCPFlagPart length can only be 1");
		}

		$this->length = $length;

		return $this;
	}

	public function isCwr() : bool{
		return ($this->flags & 0x80) >> 7 == 1;
	}

	public function setCwr(bool $set){
		if($set){
			$this->flags |= 0x80;
		}else{
			$this->flags &= 0x7F;
		}

		return $this;
	}

	public function isEce() : bool{
		return ($this->flags & 0x40) >> 6 == 1;
	}

	public function setEce(bool $set){
		if($set){
			$this->flags |= 0x40;
		}else{
			$this->flags &= 0xBF;
		}

		return $this;
	}

	public function isUrg() : bool{
		return ($this->flags & 0x20) >> 5 == 1;
	}

	public function setUrg(bool $set){
		if($set){
			$this->flags |= 0x20;
		}else{
			$this->flags &= 0xDF;
		}

		return $this;
	}

	public function isAck() : bool{
		return ($this->flags & 0x10) >> 4 == 1;
	}

	public function setAck(bool $set){
		if($set){
			$this->flags |= 0x10;
		}else{
			$this->flags &= 0xEF;
		}

		return $this;
	}

	public function isPsh() : bool{
		return ($this->flags & 0x08) >> 3 == 1;
	}

	public function setPsh(bool $set){
		if($set){
			$this->flags |= 0x08;
		}else{
			$this->flags &= 0xF7;
		}

		return $this;
	}

	public function isRst() : bool{
		return ($this->flags & 0x04) >> 2 == 1;
	}

	public function setRst(bool $set){
		if($set){
			$this->flags |= 0x04;
		}else{
			$this->flags &= 0xFB;
		}

		return $this;
	}

	public function isSyn() : bool{
		return ($this->flags & 0x02) >> 1 == 1;
	}

	public function setSyn(bool $set){
		if($set){
			$this->flags |= 0x02;
		}else{
			$this->flags &= 0xFD;
		}

		return $this;
	}

	public function isFin() : bool{
		return ($this->flags & 0x01) == 1;
	}

	public function setFin(bool $set){
		if($set){
			$this->flags |= 0x01;
		}else{
			$this->flags &= 0xFE;
		}

		return $this;
	}

	public function toBytes()
	{
		$bytes = [$this->operator->getVal(), $this->flags];

		if ($this->listEnd) {
			$bytes[0] |= 1 << 7;
		}

		if ($this->and) {
			$bytes[0] |= 1 << 6;
		}

		if ($this->not) {
			$bytes[0] |= 1 << 1;
		}

		if ($this->bitwise_match) {
			$bytes[0] |= 1;
		}

		return $bytes;
	}

	public static function fromBytes(array $bytes)
	{
		if (count($bytes) < 2) {
			throw new \Exception("Need at least 2 bytes for a valid match numeric part");
		}

		$op = $bytes[0];

		$endOfList      = (($op & 0x80) >> 7) == 1;
		$and            = (($op & 0x40) >> 6) == 1;
		$length         = (($op & 0x10) >> 4) == 1 ? 2 : 1;
		$not            = (($op & 0x02) >> 1) == 1;
		$bitwise_match  = ($op & 0x01) == 1;

		if($length != 1){
			throw new \Exception("We only expect a length of 1, if you get this error the lib is broken :(");
		}

		$value = $bytes[1];

		$matchPart = new FlowspecMatchTCPFlagPart();

		$matchPart
			->setAnd($and)
			->setListEnd($endOfList)
			->setNot($not)
			->setMatchBitwise($bitwise_match)
			->setCwr((($value & 0x80) >> 7) == 1)
			->setEce((($value & 0x40) >> 6) == 1)
			->setUrg((($value & 0x20) >> 5) == 1)
			->setAck((($value & 0x10) >> 4) == 1)
			->setPsh((($value & 0x08) >> 3) == 1)
			->setRst((($value & 0x04) >> 2) == 1)
			->setSyn((($value & 0x02) >> 1) == 1)
			->setFin(($value & 0x01) == 1);

		return $matchPart;
	}
}