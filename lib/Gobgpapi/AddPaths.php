<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: gobgp.proto

namespace Gobgpapi;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>gobgpapi.AddPaths</code>
 */
class AddPaths extends \Google\Protobuf\Internal\Message
{
	/**
	 * Generated from protobuf field <code>.gobgpapi.AddPathsConfig config = 1;</code>
	 */
	private $config = null;
	/**
	 * Generated from protobuf field <code>.gobgpapi.AddPathsState state = 2;</code>
	 */
	private $state = null;

	public function __construct()
	{
		\GPBMetadata\Gobgp::initOnce();
		parent::__construct();
	}

	/**
	 * Generated from protobuf field <code>.gobgpapi.AddPathsConfig config = 1;</code>
	 * @return \Gobgpapi\AddPathsConfig
	 */
	public function getConfig()
	{
		return $this->config;
	}

	/**
	 * Generated from protobuf field <code>.gobgpapi.AddPathsConfig config = 1;</code>
	 * @param \Gobgpapi\AddPathsConfig $var
	 * @return $this
	 */
	public function setConfig($var)
	{
		GPBUtil::checkMessage($var, \Gobgpapi\AddPathsConfig::class);
		$this->config = $var;

		return $this;
	}

	/**
	 * Generated from protobuf field <code>.gobgpapi.AddPathsState state = 2;</code>
	 * @return \Gobgpapi\AddPathsState
	 */
	public function getState()
	{
		return $this->state;
	}

	/**
	 * Generated from protobuf field <code>.gobgpapi.AddPathsState state = 2;</code>
	 * @param \Gobgpapi\AddPathsState $var
	 * @return $this
	 */
	public function setState($var)
	{
		GPBUtil::checkMessage($var, \Gobgpapi\AddPathsState::class);
		$this->state = $var;

		return $this;
	}

}
