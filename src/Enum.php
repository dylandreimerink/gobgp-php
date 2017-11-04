<?php
/**
 * Created by PhpStorm.
 * User: caveman
 * Date: 11/2/17
 * Time: 1:00 AM
 */

namespace Gobgp;

class InvalidEnumValue extends \Exception
{
}

abstract class Enum
{
	static function get($enum_val)
	{
		$ref = new \ReflectionClass(static::class);

		if (in_array($enum_val, $ref->getConstants())) {
			$class_name = static::class;
			return new $class_name($enum_val);
		} else {
			throw new InvalidEnumValue("Invalid enum value, value should be a constant from " . static::class);
		}
	}

	private $val;

	private function __construct($enum_val)
	{
		$this->val = $enum_val;
	}

	public function getVal()
	{
		return $this->val;
	}
}