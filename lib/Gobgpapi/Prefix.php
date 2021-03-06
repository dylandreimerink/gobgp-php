<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: gobgp.proto

namespace Gobgpapi;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>gobgpapi.Prefix</code>
 */
class Prefix extends \Google\Protobuf\Internal\Message
{
	/**
	 * Generated from protobuf field <code>string ip_prefix = 1;</code>
	 */
	private $ip_prefix = '';
	/**
	 * Generated from protobuf field <code>uint32 mask_length_min = 2;</code>
	 */
	private $mask_length_min = 0;
	/**
	 * Generated from protobuf field <code>uint32 mask_length_max = 3;</code>
	 */
	private $mask_length_max = 0;

	public function __construct()
	{
		\GPBMetadata\Gobgp::initOnce();
		parent::__construct();
	}

	/**
	 * Generated from protobuf field <code>string ip_prefix = 1;</code>
	 * @return string
	 */
	public function getIpPrefix()
	{
		return $this->ip_prefix;
	}

	/**
	 * Generated from protobuf field <code>string ip_prefix = 1;</code>
	 * @param string $var
	 * @return $this
	 */
	public function setIpPrefix($var)
	{
		GPBUtil::checkString($var, True);
		$this->ip_prefix = $var;

		return $this;
	}

	/**
	 * Generated from protobuf field <code>uint32 mask_length_min = 2;</code>
	 * @return int
	 */
	public function getMaskLengthMin()
	{
		return $this->mask_length_min;
	}

	/**
	 * Generated from protobuf field <code>uint32 mask_length_min = 2;</code>
	 * @param int $var
	 * @return $this
	 */
	public function setMaskLengthMin($var)
	{
		GPBUtil::checkUint32($var);
		$this->mask_length_min = $var;

		return $this;
	}

	/**
	 * Generated from protobuf field <code>uint32 mask_length_max = 3;</code>
	 * @return int
	 */
	public function getMaskLengthMax()
	{
		return $this->mask_length_max;
	}

	/**
	 * Generated from protobuf field <code>uint32 mask_length_max = 3;</code>
	 * @param int $var
	 * @return $this
	 */
	public function setMaskLengthMax($var)
	{
		GPBUtil::checkUint32($var);
		$this->mask_length_max = $var;

		return $this;
	}

}

