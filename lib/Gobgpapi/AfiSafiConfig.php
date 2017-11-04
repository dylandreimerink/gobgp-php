<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: gobgp.proto

namespace Gobgpapi;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>gobgpapi.AfiSafiConfig</code>
 */
class AfiSafiConfig extends \Google\Protobuf\Internal\Message
{
	/**
	 * Generated from protobuf field <code>uint32 family = 1;</code>
	 */
	private $family = 0;
	/**
	 * Generated from protobuf field <code>bool enabled = 2;</code>
	 */
	private $enabled = false;

	public function __construct()
	{
		\GPBMetadata\Gobgp::initOnce();
		parent::__construct();
	}

	/**
	 * Generated from protobuf field <code>uint32 family = 1;</code>
	 * @return int
	 */
	public function getFamily()
	{
		return $this->family;
	}

	/**
	 * Generated from protobuf field <code>uint32 family = 1;</code>
	 * @param int $var
	 * @return $this
	 */
	public function setFamily($var)
	{
		GPBUtil::checkUint32($var);
		$this->family = $var;

		return $this;
	}

	/**
	 * Generated from protobuf field <code>bool enabled = 2;</code>
	 * @return bool
	 */
	public function getEnabled()
	{
		return $this->enabled;
	}

	/**
	 * Generated from protobuf field <code>bool enabled = 2;</code>
	 * @param bool $var
	 * @return $this
	 */
	public function setEnabled($var)
	{
		GPBUtil::checkBool($var);
		$this->enabled = $var;

		return $this;
	}

}

