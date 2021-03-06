<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: gobgp.proto

namespace Gobgpapi;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>gobgpapi.Destination</code>
 */
class Destination extends \Google\Protobuf\Internal\Message
{
	/**
	 * Generated from protobuf field <code>string prefix = 1;</code>
	 */
	private $prefix = '';
	/**
	 * Generated from protobuf field <code>repeated .gobgpapi.Path paths = 2;</code>
	 */
	private $paths;
	/**
	 * Generated from protobuf field <code>bool longer_prefixes = 3;</code>
	 */
	private $longer_prefixes = false;
	/**
	 * Generated from protobuf field <code>bool shorter_prefixes = 4;</code>
	 */
	private $shorter_prefixes = false;

	public function __construct()
	{
		\GPBMetadata\Gobgp::initOnce();
		parent::__construct();
	}

	/**
	 * Generated from protobuf field <code>string prefix = 1;</code>
	 * @return string
	 */
	public function getPrefix()
	{
		return $this->prefix;
	}

	/**
	 * Generated from protobuf field <code>string prefix = 1;</code>
	 * @param string $var
	 * @return $this
	 */
	public function setPrefix($var)
	{
		GPBUtil::checkString($var, True);
		$this->prefix = $var;

		return $this;
	}

	/**
	 * Generated from protobuf field <code>repeated .gobgpapi.Path paths = 2;</code>
	 * @return \Google\Protobuf\Internal\RepeatedField
	 */
	public function getPaths()
	{
		return $this->paths;
	}

	/**
	 * Generated from protobuf field <code>repeated .gobgpapi.Path paths = 2;</code>
	 * @param \Gobgpapi\Path[]|\Google\Protobuf\Internal\RepeatedField $var
	 * @return $this
	 */
	public function setPaths($var)
	{
		$arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Gobgpapi\Path::class);
		$this->paths = $arr;

		return $this;
	}

	/**
	 * Generated from protobuf field <code>bool longer_prefixes = 3;</code>
	 * @return bool
	 */
	public function getLongerPrefixes()
	{
		return $this->longer_prefixes;
	}

	/**
	 * Generated from protobuf field <code>bool longer_prefixes = 3;</code>
	 * @param bool $var
	 * @return $this
	 */
	public function setLongerPrefixes($var)
	{
		GPBUtil::checkBool($var);
		$this->longer_prefixes = $var;

		return $this;
	}

	/**
	 * Generated from protobuf field <code>bool shorter_prefixes = 4;</code>
	 * @return bool
	 */
	public function getShorterPrefixes()
	{
		return $this->shorter_prefixes;
	}

	/**
	 * Generated from protobuf field <code>bool shorter_prefixes = 4;</code>
	 * @param bool $var
	 * @return $this
	 */
	public function setShorterPrefixes($var)
	{
		GPBUtil::checkBool($var);
		$this->shorter_prefixes = $var;

		return $this;
	}

}

