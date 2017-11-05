<?php
/**
 * Created by PhpStorm.
 * User: caveman
 * Date: 11/3/17
 * Time: 9:29 PM
 */

namespace Gobgp\Flowspec;


interface FlowspecMatchPartInterface
{
	/**
	 * @return bool
	 */
	public function isListEnd(): bool;

	/**
	 * @param bool $listEnd
	 */
	public function setListEnd(bool $listEnd);

	/**
	 * @return bool
	 */
	public function isAnd(): bool;

	/**
	 * @param bool $and
	 */
	public function setAnd(bool $and);

	/**
	 * @return int
	 */
	public function getLength(): int;

	/**
	 * @param int $length
	 */
	public function setLength(int $length);

	public function toBytes();

	public static function fromBytes(array $bytes);
}