<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: gobgp.proto

namespace Gobgpapi;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>gobgpapi.AddBmpRequest</code>
 */
class AddBmpRequest extends \Google\Protobuf\Internal\Message
{
	/**
	 * Generated from protobuf field <code>string address = 1;</code>
	 */
	private $address = '';
	/**
	 * Generated from protobuf field <code>uint32 port = 2;</code>
	 */
	private $port = 0;
	/**
	 * Generated from protobuf field <code>.gobgpapi.AddBmpRequest.MonitoringPolicy type = 3;</code>
	 */
	private $type = 0;

	public function __construct()
	{
		\GPBMetadata\Gobgp::initOnce();
		parent::__construct();
	}

	/**
	 * Generated from protobuf field <code>string address = 1;</code>
	 * @return string
	 */
	public function getAddress()
	{
		return $this->address;
	}

	/**
	 * Generated from protobuf field <code>string address = 1;</code>
	 * @param string $var
	 * @return $this
	 */
	public function setAddress($var)
	{
		GPBUtil::checkString($var, True);
		$this->address = $var;

		return $this;
	}

	/**
	 * Generated from protobuf field <code>uint32 port = 2;</code>
	 * @return int
	 */
	public function getPort()
	{
		return $this->port;
	}

	/**
	 * Generated from protobuf field <code>uint32 port = 2;</code>
	 * @param int $var
	 * @return $this
	 */
	public function setPort($var)
	{
		GPBUtil::checkUint32($var);
		$this->port = $var;

		return $this;
	}

	/**
	 * Generated from protobuf field <code>.gobgpapi.AddBmpRequest.MonitoringPolicy type = 3;</code>
	 * @return int
	 */
	public function getType()
	{
		return $this->type;
	}

	/**
	 * Generated from protobuf field <code>.gobgpapi.AddBmpRequest.MonitoringPolicy type = 3;</code>
	 * @param int $var
	 * @return $this
	 */
	public function setType($var)
	{
		GPBUtil::checkEnum($var, \Gobgpapi\AddBmpRequest_MonitoringPolicy::class);
		$this->type = $var;

		return $this;
	}

}
