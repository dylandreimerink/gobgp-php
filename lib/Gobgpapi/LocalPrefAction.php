<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: gobgp.proto

namespace Gobgpapi;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>gobgpapi.LocalPrefAction</code>
 */
class LocalPrefAction extends \Google\Protobuf\Internal\Message
{
	/**
	 * Generated from protobuf field <code>uint32 value = 1;</code>
	 */
	private $value = 0;

	public function __construct()
	{
		\GPBMetadata\Gobgp::initOnce();
		parent::__construct();
	}

	/**
	 * Generated from protobuf field <code>uint32 value = 1;</code>
	 * @return int
	 */
	public function getValue()
	{
		return $this->value;
	}

	/**
	 * Generated from protobuf field <code>uint32 value = 1;</code>
	 * @param int $var
	 * @return $this
	 */
	public function setValue($var)
	{
		GPBUtil::checkUint32($var);
		$this->value = $var;

		return $this;
	}

}

