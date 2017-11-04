<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: gobgp.proto

namespace Gobgpapi;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>gobgpapi.Actions</code>
 */
class Actions extends \Google\Protobuf\Internal\Message
{
	/**
	 * Generated from protobuf field <code>.gobgpapi.RouteAction route_action = 1;</code>
	 */
	private $route_action = 0;
	/**
	 * Generated from protobuf field <code>.gobgpapi.CommunityAction community = 2;</code>
	 */
	private $community = null;
	/**
	 * Generated from protobuf field <code>.gobgpapi.MedAction med = 3;</code>
	 */
	private $med = null;
	/**
	 * Generated from protobuf field <code>.gobgpapi.AsPrependAction as_prepend = 4;</code>
	 */
	private $as_prepend = null;
	/**
	 * Generated from protobuf field <code>.gobgpapi.CommunityAction ext_community = 5;</code>
	 */
	private $ext_community = null;
	/**
	 * Generated from protobuf field <code>.gobgpapi.NexthopAction nexthop = 6;</code>
	 */
	private $nexthop = null;
	/**
	 * Generated from protobuf field <code>.gobgpapi.LocalPrefAction local_pref = 7;</code>
	 */
	private $local_pref = null;
	/**
	 * Generated from protobuf field <code>.gobgpapi.CommunityAction large_community = 8;</code>
	 */
	private $large_community = null;

	public function __construct()
	{
		\GPBMetadata\Gobgp::initOnce();
		parent::__construct();
	}

	/**
	 * Generated from protobuf field <code>.gobgpapi.RouteAction route_action = 1;</code>
	 * @return int
	 */
	public function getRouteAction()
	{
		return $this->route_action;
	}

	/**
	 * Generated from protobuf field <code>.gobgpapi.RouteAction route_action = 1;</code>
	 * @param int $var
	 * @return $this
	 */
	public function setRouteAction($var)
	{
		GPBUtil::checkEnum($var, \Gobgpapi\RouteAction::class);
		$this->route_action = $var;

		return $this;
	}

	/**
	 * Generated from protobuf field <code>.gobgpapi.CommunityAction community = 2;</code>
	 * @return \Gobgpapi\CommunityAction
	 */
	public function getCommunity()
	{
		return $this->community;
	}

	/**
	 * Generated from protobuf field <code>.gobgpapi.CommunityAction community = 2;</code>
	 * @param \Gobgpapi\CommunityAction $var
	 * @return $this
	 */
	public function setCommunity($var)
	{
		GPBUtil::checkMessage($var, \Gobgpapi\CommunityAction::class);
		$this->community = $var;

		return $this;
	}

	/**
	 * Generated from protobuf field <code>.gobgpapi.MedAction med = 3;</code>
	 * @return \Gobgpapi\MedAction
	 */
	public function getMed()
	{
		return $this->med;
	}

	/**
	 * Generated from protobuf field <code>.gobgpapi.MedAction med = 3;</code>
	 * @param \Gobgpapi\MedAction $var
	 * @return $this
	 */
	public function setMed($var)
	{
		GPBUtil::checkMessage($var, \Gobgpapi\MedAction::class);
		$this->med = $var;

		return $this;
	}

	/**
	 * Generated from protobuf field <code>.gobgpapi.AsPrependAction as_prepend = 4;</code>
	 * @return \Gobgpapi\AsPrependAction
	 */
	public function getAsPrepend()
	{
		return $this->as_prepend;
	}

	/**
	 * Generated from protobuf field <code>.gobgpapi.AsPrependAction as_prepend = 4;</code>
	 * @param \Gobgpapi\AsPrependAction $var
	 * @return $this
	 */
	public function setAsPrepend($var)
	{
		GPBUtil::checkMessage($var, \Gobgpapi\AsPrependAction::class);
		$this->as_prepend = $var;

		return $this;
	}

	/**
	 * Generated from protobuf field <code>.gobgpapi.CommunityAction ext_community = 5;</code>
	 * @return \Gobgpapi\CommunityAction
	 */
	public function getExtCommunity()
	{
		return $this->ext_community;
	}

	/**
	 * Generated from protobuf field <code>.gobgpapi.CommunityAction ext_community = 5;</code>
	 * @param \Gobgpapi\CommunityAction $var
	 * @return $this
	 */
	public function setExtCommunity($var)
	{
		GPBUtil::checkMessage($var, \Gobgpapi\CommunityAction::class);
		$this->ext_community = $var;

		return $this;
	}

	/**
	 * Generated from protobuf field <code>.gobgpapi.NexthopAction nexthop = 6;</code>
	 * @return \Gobgpapi\NexthopAction
	 */
	public function getNexthop()
	{
		return $this->nexthop;
	}

	/**
	 * Generated from protobuf field <code>.gobgpapi.NexthopAction nexthop = 6;</code>
	 * @param \Gobgpapi\NexthopAction $var
	 * @return $this
	 */
	public function setNexthop($var)
	{
		GPBUtil::checkMessage($var, \Gobgpapi\NexthopAction::class);
		$this->nexthop = $var;

		return $this;
	}

	/**
	 * Generated from protobuf field <code>.gobgpapi.LocalPrefAction local_pref = 7;</code>
	 * @return \Gobgpapi\LocalPrefAction
	 */
	public function getLocalPref()
	{
		return $this->local_pref;
	}

	/**
	 * Generated from protobuf field <code>.gobgpapi.LocalPrefAction local_pref = 7;</code>
	 * @param \Gobgpapi\LocalPrefAction $var
	 * @return $this
	 */
	public function setLocalPref($var)
	{
		GPBUtil::checkMessage($var, \Gobgpapi\LocalPrefAction::class);
		$this->local_pref = $var;

		return $this;
	}

	/**
	 * Generated from protobuf field <code>.gobgpapi.CommunityAction large_community = 8;</code>
	 * @return \Gobgpapi\CommunityAction
	 */
	public function getLargeCommunity()
	{
		return $this->large_community;
	}

	/**
	 * Generated from protobuf field <code>.gobgpapi.CommunityAction large_community = 8;</code>
	 * @param \Gobgpapi\CommunityAction $var
	 * @return $this
	 */
	public function setLargeCommunity($var)
	{
		GPBUtil::checkMessage($var, \Gobgpapi\CommunityAction::class);
		$this->large_community = $var;

		return $this;
	}

}
