<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: gobgp.proto

namespace Gobgpapi;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>gobgpapi.RouteTargetMembership</code>
 */
class RouteTargetMembership extends \Google\Protobuf\Internal\Message
{
	/**
	 * Generated from protobuf field <code>.gobgpapi.RouteTargetMembershipConfig config = 1;</code>
	 */
	private $config = null;
	/**
	 * Generated from protobuf field <code>.gobgpapi.RouteTargetMembershipState state = 2;</code>
	 */
	private $state = null;

	public function __construct()
	{
		\GPBMetadata\Gobgp::initOnce();
		parent::__construct();
	}

	/**
	 * Generated from protobuf field <code>.gobgpapi.RouteTargetMembershipConfig config = 1;</code>
	 * @return \Gobgpapi\RouteTargetMembershipConfig
	 */
	public function getConfig()
	{
		return $this->config;
	}

	/**
	 * Generated from protobuf field <code>.gobgpapi.RouteTargetMembershipConfig config = 1;</code>
	 * @param \Gobgpapi\RouteTargetMembershipConfig $var
	 * @return $this
	 */
	public function setConfig($var)
	{
		GPBUtil::checkMessage($var, \Gobgpapi\RouteTargetMembershipConfig::class);
		$this->config = $var;

		return $this;
	}

	/**
	 * Generated from protobuf field <code>.gobgpapi.RouteTargetMembershipState state = 2;</code>
	 * @return \Gobgpapi\RouteTargetMembershipState
	 */
	public function getState()
	{
		return $this->state;
	}

	/**
	 * Generated from protobuf field <code>.gobgpapi.RouteTargetMembershipState state = 2;</code>
	 * @param \Gobgpapi\RouteTargetMembershipState $var
	 * @return $this
	 */
	public function setState($var)
	{
		GPBUtil::checkMessage($var, \Gobgpapi\RouteTargetMembershipState::class);
		$this->state = $var;

		return $this;
	}

}

