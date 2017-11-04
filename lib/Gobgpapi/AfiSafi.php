<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: gobgp.proto

namespace Gobgpapi;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>gobgpapi.AfiSafi</code>
 */
class AfiSafi extends \Google\Protobuf\Internal\Message
{
	/**
	 * Generated from protobuf field <code>.gobgpapi.MpGracefulRestart mp_graceful_restart = 1;</code>
	 */
	private $mp_graceful_restart = null;
	/**
	 * Generated from protobuf field <code>.gobgpapi.AfiSafiConfig config = 2;</code>
	 */
	private $config = null;
	/**
	 * Generated from protobuf field <code>.gobgpapi.ApplyPolicy apply_policy = 3;</code>
	 */
	private $apply_policy = null;
	/**
	 * TODO:
	 * Support the following structures:
	 * - Ipv4Unicast
	 * - Ipv6Unicast
	 * - Ipv4LabelledUnicast
	 * - Ipv6LabelledUnicast
	 * - L3vpnIpv4Unicast
	 * - L3vpnIpv6Unicast
	 * - L3vpnIpv4Multicast
	 * - L3vpnIpv6Multicast
	 * - L2vpnVpls
	 * - L2vpnEvpn
	 *
	 * Generated from protobuf field <code>.gobgpapi.RouteSelectionOptions route_selection_options = 4;</code>
	 */
	private $route_selection_options = null;
	/**
	 * Generated from protobuf field <code>.gobgpapi.UseMultiplePaths use_multiple_paths = 5;</code>
	 */
	private $use_multiple_paths = null;
	/**
	 * Generated from protobuf field <code>.gobgpapi.PrefixLimit prefix_limits = 6;</code>
	 */
	private $prefix_limits = null;
	/**
	 * Generated from protobuf field <code>.gobgpapi.RouteTargetMembership route_target_membership = 7;</code>
	 */
	private $route_target_membership = null;
	/**
	 * Generated from protobuf field <code>.gobgpapi.LongLivedGracefulRestart long_lived_graceful_restart = 8;</code>
	 */
	private $long_lived_graceful_restart = null;
	/**
	 * Generated from protobuf field <code>.gobgpapi.AddPaths add_paths = 9;</code>
	 */
	private $add_paths = null;

	public function __construct()
	{
		\GPBMetadata\Gobgp::initOnce();
		parent::__construct();
	}

	/**
	 * Generated from protobuf field <code>.gobgpapi.MpGracefulRestart mp_graceful_restart = 1;</code>
	 * @return \Gobgpapi\MpGracefulRestart
	 */
	public function getMpGracefulRestart()
	{
		return $this->mp_graceful_restart;
	}

	/**
	 * Generated from protobuf field <code>.gobgpapi.MpGracefulRestart mp_graceful_restart = 1;</code>
	 * @param \Gobgpapi\MpGracefulRestart $var
	 * @return $this
	 */
	public function setMpGracefulRestart($var)
	{
		GPBUtil::checkMessage($var, \Gobgpapi\MpGracefulRestart::class);
		$this->mp_graceful_restart = $var;

		return $this;
	}

	/**
	 * Generated from protobuf field <code>.gobgpapi.AfiSafiConfig config = 2;</code>
	 * @return \Gobgpapi\AfiSafiConfig
	 */
	public function getConfig()
	{
		return $this->config;
	}

	/**
	 * Generated from protobuf field <code>.gobgpapi.AfiSafiConfig config = 2;</code>
	 * @param \Gobgpapi\AfiSafiConfig $var
	 * @return $this
	 */
	public function setConfig($var)
	{
		GPBUtil::checkMessage($var, \Gobgpapi\AfiSafiConfig::class);
		$this->config = $var;

		return $this;
	}

	/**
	 * Generated from protobuf field <code>.gobgpapi.ApplyPolicy apply_policy = 3;</code>
	 * @return \Gobgpapi\ApplyPolicy
	 */
	public function getApplyPolicy()
	{
		return $this->apply_policy;
	}

	/**
	 * Generated from protobuf field <code>.gobgpapi.ApplyPolicy apply_policy = 3;</code>
	 * @param \Gobgpapi\ApplyPolicy $var
	 * @return $this
	 */
	public function setApplyPolicy($var)
	{
		GPBUtil::checkMessage($var, \Gobgpapi\ApplyPolicy::class);
		$this->apply_policy = $var;

		return $this;
	}

	/**
	 * TODO:
	 * Support the following structures:
	 * - Ipv4Unicast
	 * - Ipv6Unicast
	 * - Ipv4LabelledUnicast
	 * - Ipv6LabelledUnicast
	 * - L3vpnIpv4Unicast
	 * - L3vpnIpv6Unicast
	 * - L3vpnIpv4Multicast
	 * - L3vpnIpv6Multicast
	 * - L2vpnVpls
	 * - L2vpnEvpn
	 *
	 * Generated from protobuf field <code>.gobgpapi.RouteSelectionOptions route_selection_options = 4;</code>
	 * @return \Gobgpapi\RouteSelectionOptions
	 */
	public function getRouteSelectionOptions()
	{
		return $this->route_selection_options;
	}

	/**
	 * TODO:
	 * Support the following structures:
	 * - Ipv4Unicast
	 * - Ipv6Unicast
	 * - Ipv4LabelledUnicast
	 * - Ipv6LabelledUnicast
	 * - L3vpnIpv4Unicast
	 * - L3vpnIpv6Unicast
	 * - L3vpnIpv4Multicast
	 * - L3vpnIpv6Multicast
	 * - L2vpnVpls
	 * - L2vpnEvpn
	 *
	 * Generated from protobuf field <code>.gobgpapi.RouteSelectionOptions route_selection_options = 4;</code>
	 * @param \Gobgpapi\RouteSelectionOptions $var
	 * @return $this
	 */
	public function setRouteSelectionOptions($var)
	{
		GPBUtil::checkMessage($var, \Gobgpapi\RouteSelectionOptions::class);
		$this->route_selection_options = $var;

		return $this;
	}

	/**
	 * Generated from protobuf field <code>.gobgpapi.UseMultiplePaths use_multiple_paths = 5;</code>
	 * @return \Gobgpapi\UseMultiplePaths
	 */
	public function getUseMultiplePaths()
	{
		return $this->use_multiple_paths;
	}

	/**
	 * Generated from protobuf field <code>.gobgpapi.UseMultiplePaths use_multiple_paths = 5;</code>
	 * @param \Gobgpapi\UseMultiplePaths $var
	 * @return $this
	 */
	public function setUseMultiplePaths($var)
	{
		GPBUtil::checkMessage($var, \Gobgpapi\UseMultiplePaths::class);
		$this->use_multiple_paths = $var;

		return $this;
	}

	/**
	 * Generated from protobuf field <code>.gobgpapi.PrefixLimit prefix_limits = 6;</code>
	 * @return \Gobgpapi\PrefixLimit
	 */
	public function getPrefixLimits()
	{
		return $this->prefix_limits;
	}

	/**
	 * Generated from protobuf field <code>.gobgpapi.PrefixLimit prefix_limits = 6;</code>
	 * @param \Gobgpapi\PrefixLimit $var
	 * @return $this
	 */
	public function setPrefixLimits($var)
	{
		GPBUtil::checkMessage($var, \Gobgpapi\PrefixLimit::class);
		$this->prefix_limits = $var;

		return $this;
	}

	/**
	 * Generated from protobuf field <code>.gobgpapi.RouteTargetMembership route_target_membership = 7;</code>
	 * @return \Gobgpapi\RouteTargetMembership
	 */
	public function getRouteTargetMembership()
	{
		return $this->route_target_membership;
	}

	/**
	 * Generated from protobuf field <code>.gobgpapi.RouteTargetMembership route_target_membership = 7;</code>
	 * @param \Gobgpapi\RouteTargetMembership $var
	 * @return $this
	 */
	public function setRouteTargetMembership($var)
	{
		GPBUtil::checkMessage($var, \Gobgpapi\RouteTargetMembership::class);
		$this->route_target_membership = $var;

		return $this;
	}

	/**
	 * Generated from protobuf field <code>.gobgpapi.LongLivedGracefulRestart long_lived_graceful_restart = 8;</code>
	 * @return \Gobgpapi\LongLivedGracefulRestart
	 */
	public function getLongLivedGracefulRestart()
	{
		return $this->long_lived_graceful_restart;
	}

	/**
	 * Generated from protobuf field <code>.gobgpapi.LongLivedGracefulRestart long_lived_graceful_restart = 8;</code>
	 * @param \Gobgpapi\LongLivedGracefulRestart $var
	 * @return $this
	 */
	public function setLongLivedGracefulRestart($var)
	{
		GPBUtil::checkMessage($var, \Gobgpapi\LongLivedGracefulRestart::class);
		$this->long_lived_graceful_restart = $var;

		return $this;
	}

	/**
	 * Generated from protobuf field <code>.gobgpapi.AddPaths add_paths = 9;</code>
	 * @return \Gobgpapi\AddPaths
	 */
	public function getAddPaths()
	{
		return $this->add_paths;
	}

	/**
	 * Generated from protobuf field <code>.gobgpapi.AddPaths add_paths = 9;</code>
	 * @param \Gobgpapi\AddPaths $var
	 * @return $this
	 */
	public function setAddPaths($var)
	{
		GPBUtil::checkMessage($var, \Gobgpapi\AddPaths::class);
		$this->add_paths = $var;

		return $this;
	}

}

