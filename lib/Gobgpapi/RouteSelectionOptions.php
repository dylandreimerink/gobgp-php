<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: gobgp.proto

namespace Gobgpapi;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>gobgpapi.RouteSelectionOptions</code>
 */
class RouteSelectionOptions extends \Google\Protobuf\Internal\Message
{
	/**
	 * Generated from protobuf field <code>.gobgpapi.RouteSelectionOptionsConfig config = 1;</code>
	 */
	private $config = null;
	/**
	 * Generated from protobuf field <code>.gobgpapi.RouteSelectionOptionsState state = 2;</code>
	 */
	private $state = null;

	public function __construct()
	{
		\GPBMetadata\Gobgp::initOnce();
		parent::__construct();
	}

	/**
	 * Generated from protobuf field <code>.gobgpapi.RouteSelectionOptionsConfig config = 1;</code>
	 * @return \Gobgpapi\RouteSelectionOptionsConfig
	 */
	public function getConfig()
	{
		return $this->config;
	}

	/**
	 * Generated from protobuf field <code>.gobgpapi.RouteSelectionOptionsConfig config = 1;</code>
	 * @param \Gobgpapi\RouteSelectionOptionsConfig $var
	 * @return $this
	 */
	public function setConfig($var)
	{
		GPBUtil::checkMessage($var, \Gobgpapi\RouteSelectionOptionsConfig::class);
		$this->config = $var;

		return $this;
	}

	/**
	 * Generated from protobuf field <code>.gobgpapi.RouteSelectionOptionsState state = 2;</code>
	 * @return \Gobgpapi\RouteSelectionOptionsState
	 */
	public function getState()
	{
		return $this->state;
	}

	/**
	 * Generated from protobuf field <code>.gobgpapi.RouteSelectionOptionsState state = 2;</code>
	 * @param \Gobgpapi\RouteSelectionOptionsState $var
	 * @return $this
	 */
	public function setState($var)
	{
		GPBUtil::checkMessage($var, \Gobgpapi\RouteSelectionOptionsState::class);
		$this->state = $var;

		return $this;
	}

}

