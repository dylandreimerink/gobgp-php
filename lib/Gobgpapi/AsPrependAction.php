<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: gobgp.proto

namespace Gobgpapi;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>gobgpapi.AsPrependAction</code>
 */
class AsPrependAction extends \Google\Protobuf\Internal\Message
{
	/**
	 * Generated from protobuf field <code>uint32 asn = 1;</code>
	 */
	private $asn = 0;
	/**
	 * Generated from protobuf field <code>uint32 repeat = 2;</code>
	 */
	private $repeat = 0;
	/**
	 * Generated from protobuf field <code>bool use_left_most = 3;</code>
	 */
	private $use_left_most = false;

	public function __construct()
	{
		\GPBMetadata\Gobgp::initOnce();
		parent::__construct();
	}

	/**
	 * Generated from protobuf field <code>uint32 asn = 1;</code>
	 * @return int
	 */
	public function getAsn()
	{
		return $this->asn;
	}

	/**
	 * Generated from protobuf field <code>uint32 asn = 1;</code>
	 * @param int $var
	 * @return $this
	 */
	public function setAsn($var)
	{
		GPBUtil::checkUint32($var);
		$this->asn = $var;

		return $this;
	}

	/**
	 * Generated from protobuf field <code>uint32 repeat = 2;</code>
	 * @return int
	 */
	public function getRepeat()
	{
		return $this->repeat;
	}

	/**
	 * Generated from protobuf field <code>uint32 repeat = 2;</code>
	 * @param int $var
	 * @return $this
	 */
	public function setRepeat($var)
	{
		GPBUtil::checkUint32($var);
		$this->repeat = $var;

		return $this;
	}

	/**
	 * Generated from protobuf field <code>bool use_left_most = 3;</code>
	 * @return bool
	 */
	public function getUseLeftMost()
	{
		return $this->use_left_most;
	}

	/**
	 * Generated from protobuf field <code>bool use_left_most = 3;</code>
	 * @param bool $var
	 * @return $this
	 */
	public function setUseLeftMost($var)
	{
		GPBUtil::checkBool($var);
		$this->use_left_most = $var;

		return $this;
	}

}

