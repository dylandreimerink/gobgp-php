<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: gobgp.proto

namespace Gobgpapi;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>gobgpapi.LongLivedGracefulRestartState</code>
 */
class LongLivedGracefulRestartState extends \Google\Protobuf\Internal\Message
{
	/**
	 * Generated from protobuf field <code>bool enabled = 1;</code>
	 */
	private $enabled = false;
	/**
	 * Generated from protobuf field <code>bool received = 2;</code>
	 */
	private $received = false;
	/**
	 * Generated from protobuf field <code>bool advertised = 3;</code>
	 */
	private $advertised = false;
	/**
	 * Generated from protobuf field <code>uint32 peer_restart_time = 4;</code>
	 */
	private $peer_restart_time = 0;
	/**
	 * Generated from protobuf field <code>bool peer_restart_timer_expired = 5;</code>
	 */
	private $peer_restart_timer_expired = false;

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

	/**
	 * Generated from protobuf field <code>bool received = 2;</code>
	 * @return bool
	 */
	public function getReceived()
	{
		return $this->received;
	}

	/**
	 * Generated from protobuf field <code>bool received = 2;</code>
	 * @param bool $var
	 * @return $this
	 */
	public function setReceived($var)
	{
		GPBUtil::checkBool($var);
		$this->received = $var;

		return $this;
	}

	/**
	 * Generated from protobuf field <code>bool advertised = 3;</code>
	 * @return bool
	 */
	public function getAdvertised()
	{
		return $this->advertised;
	}

	/**
	 * Generated from protobuf field <code>bool advertised = 3;</code>
	 * @param bool $var
	 * @return $this
	 */
	public function setAdvertised($var)
	{
		GPBUtil::checkBool($var);
		$this->advertised = $var;

		return $this;
	}

	/**
	 * Generated from protobuf field <code>uint32 peer_restart_time = 4;</code>
	 * @return int
	 */
	public function getPeerRestartTime()
	{
		return $this->peer_restart_time;
	}

	/**
	 * Generated from protobuf field <code>uint32 peer_restart_time = 4;</code>
	 * @param int $var
	 * @return $this
	 */
	public function setPeerRestartTime($var)
	{
		GPBUtil::checkUint32($var);
		$this->peer_restart_time = $var;

		return $this;
	}

	/**
	 * Generated from protobuf field <code>bool peer_restart_timer_expired = 5;</code>
	 * @return bool
	 */
	public function getPeerRestartTimerExpired()
	{
		return $this->peer_restart_timer_expired;
	}

	/**
	 * Generated from protobuf field <code>bool peer_restart_timer_expired = 5;</code>
	 * @param bool $var
	 * @return $this
	 */
	public function setPeerRestartTimerExpired($var)
	{
		GPBUtil::checkBool($var);
		$this->peer_restart_timer_expired = $var;

		return $this;
	}

}
