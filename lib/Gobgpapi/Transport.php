<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: gobgp.proto

namespace Gobgpapi;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>gobgpapi.Transport</code>
 */
class Transport extends \Google\Protobuf\Internal\Message
{
	/**
	 * Generated from protobuf field <code>string local_address = 1;</code>
	 */
	private $local_address = '';
	/**
	 * Generated from protobuf field <code>uint32 local_port = 2;</code>
	 */
	private $local_port = 0;
	/**
	 * Generated from protobuf field <code>bool mtu_discovery = 3;</code>
	 */
	private $mtu_discovery = false;
	/**
	 * Generated from protobuf field <code>bool passive_mode = 4;</code>
	 */
	private $passive_mode = false;
	/**
	 * Generated from protobuf field <code>string remote_address = 5;</code>
	 */
	private $remote_address = '';
	/**
	 * Generated from protobuf field <code>uint32 remote_port = 6;</code>
	 */
	private $remote_port = 0;
	/**
	 * Generated from protobuf field <code>uint32 tcp_mss = 7;</code>
	 */
	private $tcp_mss = 0;

	public function __construct()
	{
		\GPBMetadata\Gobgp::initOnce();
		parent::__construct();
	}

	/**
	 * Generated from protobuf field <code>string local_address = 1;</code>
	 * @return string
	 */
	public function getLocalAddress()
	{
		return $this->local_address;
	}

	/**
	 * Generated from protobuf field <code>string local_address = 1;</code>
	 * @param string $var
	 * @return $this
	 */
	public function setLocalAddress($var)
	{
		GPBUtil::checkString($var, True);
		$this->local_address = $var;

		return $this;
	}

	/**
	 * Generated from protobuf field <code>uint32 local_port = 2;</code>
	 * @return int
	 */
	public function getLocalPort()
	{
		return $this->local_port;
	}

	/**
	 * Generated from protobuf field <code>uint32 local_port = 2;</code>
	 * @param int $var
	 * @return $this
	 */
	public function setLocalPort($var)
	{
		GPBUtil::checkUint32($var);
		$this->local_port = $var;

		return $this;
	}

	/**
	 * Generated from protobuf field <code>bool mtu_discovery = 3;</code>
	 * @return bool
	 */
	public function getMtuDiscovery()
	{
		return $this->mtu_discovery;
	}

	/**
	 * Generated from protobuf field <code>bool mtu_discovery = 3;</code>
	 * @param bool $var
	 * @return $this
	 */
	public function setMtuDiscovery($var)
	{
		GPBUtil::checkBool($var);
		$this->mtu_discovery = $var;

		return $this;
	}

	/**
	 * Generated from protobuf field <code>bool passive_mode = 4;</code>
	 * @return bool
	 */
	public function getPassiveMode()
	{
		return $this->passive_mode;
	}

	/**
	 * Generated from protobuf field <code>bool passive_mode = 4;</code>
	 * @param bool $var
	 * @return $this
	 */
	public function setPassiveMode($var)
	{
		GPBUtil::checkBool($var);
		$this->passive_mode = $var;

		return $this;
	}

	/**
	 * Generated from protobuf field <code>string remote_address = 5;</code>
	 * @return string
	 */
	public function getRemoteAddress()
	{
		return $this->remote_address;
	}

	/**
	 * Generated from protobuf field <code>string remote_address = 5;</code>
	 * @param string $var
	 * @return $this
	 */
	public function setRemoteAddress($var)
	{
		GPBUtil::checkString($var, True);
		$this->remote_address = $var;

		return $this;
	}

	/**
	 * Generated from protobuf field <code>uint32 remote_port = 6;</code>
	 * @return int
	 */
	public function getRemotePort()
	{
		return $this->remote_port;
	}

	/**
	 * Generated from protobuf field <code>uint32 remote_port = 6;</code>
	 * @param int $var
	 * @return $this
	 */
	public function setRemotePort($var)
	{
		GPBUtil::checkUint32($var);
		$this->remote_port = $var;

		return $this;
	}

	/**
	 * Generated from protobuf field <code>uint32 tcp_mss = 7;</code>
	 * @return int
	 */
	public function getTcpMss()
	{
		return $this->tcp_mss;
	}

	/**
	 * Generated from protobuf field <code>uint32 tcp_mss = 7;</code>
	 * @param int $var
	 * @return $this
	 */
	public function setTcpMss($var)
	{
		GPBUtil::checkUint32($var);
		$this->tcp_mss = $var;

		return $this;
	}

}

