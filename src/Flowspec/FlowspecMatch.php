<?php
/**
 * Created by PhpStorm.
 * User: caveman
 * Date: 11/2/17
 * Time: 10:06 PM
 */

namespace Gobgp\Flowspec;

abstract class FlowspecMatch
{
	protected $type;

	public function __construct(FlowspecMatchType $type)
	{
		$this->setType($type);
	}

	/**
	 * @return FlowspecMatchType
	 */
	public function getType(): FlowspecMatchType
	{
		return $this->type;
	}

	/**
	 * @param FlowspecMatchType $type
	 */
	public function setType(FlowspecMatchType $type)
	{
		$this->type = $type;
	}

	public abstract function toBytes(): array;

	public abstract function byteCount(): int;

	public abstract static function fromBytes(array $bytes);

}