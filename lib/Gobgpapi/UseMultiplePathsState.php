<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: gobgp.proto

namespace Gobgpapi;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>gobgpapi.UseMultiplePathsState</code>
 */
class UseMultiplePathsState extends \Google\Protobuf\Internal\Message
{
	/**
	 * Generated from protobuf field <code>bool enabled = 1;</code>
	 */
	private $enabled = false;

	public function __construct()
	{
		\GPBMetadata\Gobgp::initOnce();
		parent::__construct();
	}

	/**
	 * Generated from protobuf field <code>bool enabled = 1;</code>
	 * @return bool
	 */
	public function getEnabled()
	{
		return $this->enabled;
	}

	/**
	 * Generated from protobuf field <code>bool enabled = 1;</code>
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

