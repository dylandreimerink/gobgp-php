<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: gobgp.proto

namespace Gobgpapi;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>gobgpapi.LongLivedGracefulRestart</code>
 */
class LongLivedGracefulRestart extends \Google\Protobuf\Internal\Message
{
	/**
	 * Generated from protobuf field <code>.gobgpapi.LongLivedGracefulRestartConfig config = 1;</code>
	 */
	private $config = null;
	/**
	 * Generated from protobuf field <code>.gobgpapi.LongLivedGracefulRestartState state = 2;</code>
	 */
	private $state = null;

	public function __construct()
	{
		\GPBMetadata\Gobgp::initOnce();
		parent::__construct();
	}

	/**
	 * Generated from protobuf field <code>.gobgpapi.LongLivedGracefulRestartConfig config = 1;</code>
	 * @return \Gobgpapi\LongLivedGracefulRestartConfig
	 */
	public function getConfig()
	{
		return $this->config;
	}

	/**
	 * Generated from protobuf field <code>.gobgpapi.LongLivedGracefulRestartConfig config = 1;</code>
	 * @param \Gobgpapi\LongLivedGracefulRestartConfig $var
	 * @return $this
	 */
	public function setConfig($var)
	{
		GPBUtil::checkMessage($var, \Gobgpapi\LongLivedGracefulRestartConfig::class);
		$this->config = $var;

		return $this;
	}

	/**
	 * Generated from protobuf field <code>.gobgpapi.LongLivedGracefulRestartState state = 2;</code>
	 * @return \Gobgpapi\LongLivedGracefulRestartState
	 */
	public function getState()
	{
		return $this->state;
	}

	/**
	 * Generated from protobuf field <code>.gobgpapi.LongLivedGracefulRestartState state = 2;</code>
	 * @param \Gobgpapi\LongLivedGracefulRestartState $var
	 * @return $this
	 */
	public function setState($var)
	{
		GPBUtil::checkMessage($var, \Gobgpapi\LongLivedGracefulRestartState::class);
		$this->state = $var;

		return $this;
	}

}
