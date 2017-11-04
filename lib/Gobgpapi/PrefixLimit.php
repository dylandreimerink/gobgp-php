<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: gobgp.proto

namespace Gobgpapi;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>gobgpapi.PrefixLimit</code>
 */
class PrefixLimit extends \Google\Protobuf\Internal\Message
{
	/**
	 * Generated from protobuf field <code>uint32 family = 1;</code>
	 */
	private $family = 0;
	/**
	 * Generated from protobuf field <code>uint32 max_prefixes = 2;</code>
	 */
	private $max_prefixes = 0;
	/**
	 * Generated from protobuf field <code>uint32 shutdown_threshold_pct = 3;</code>
	 */
	private $shutdown_threshold_pct = 0;

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
	 * Generated from protobuf field <code>uint32 max_prefixes = 2;</code>
	 * @return int
	 */
	public function getMaxPrefixes()
	{
		return $this->max_prefixes;
	}

	/**
	 * Generated from protobuf field <code>uint32 max_prefixes = 2;</code>
	 * @param int $var
	 * @return $this
	 */
	public function setMaxPrefixes($var)
	{
		GPBUtil::checkUint32($var);
		$this->max_prefixes = $var;

		return $this;
	}

	/**
	 * Generated from protobuf field <code>uint32 shutdown_threshold_pct = 3;</code>
	 * @return int
	 */
	public function getShutdownThresholdPct()
	{
		return $this->shutdown_threshold_pct;
	}

	/**
	 * Generated from protobuf field <code>uint32 shutdown_threshold_pct = 3;</code>
	 * @param int $var
	 * @return $this
	 */
	public function setShutdownThresholdPct($var)
	{
		GPBUtil::checkUint32($var);
		$this->shutdown_threshold_pct = $var;

		return $this;
	}

}

