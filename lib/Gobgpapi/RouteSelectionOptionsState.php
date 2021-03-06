<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: gobgp.proto

namespace Gobgpapi;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>gobgpapi.RouteSelectionOptionsState</code>
 */
class RouteSelectionOptionsState extends \Google\Protobuf\Internal\Message
{
	/**
	 * Generated from protobuf field <code>bool always_compare_med = 1;</code>
	 */
	private $always_compare_med = false;
	/**
	 * Generated from protobuf field <code>bool ignore_as_path_length = 2;</code>
	 */
	private $ignore_as_path_length = false;
	/**
	 * Generated from protobuf field <code>bool external_compare_router_id = 3;</code>
	 */
	private $external_compare_router_id = false;
	/**
	 * Generated from protobuf field <code>bool advertise_inactive_routes = 4;</code>
	 */
	private $advertise_inactive_routes = false;
	/**
	 * Generated from protobuf field <code>bool enable_aigp = 5;</code>
	 */
	private $enable_aigp = false;
	/**
	 * Generated from protobuf field <code>bool ignore_next_hop_igp_metric = 6;</code>
	 */
	private $ignore_next_hop_igp_metric = false;

	public function __construct()
	{
		\GPBMetadata\Gobgp::initOnce();
		parent::__construct();
	}

	/**
	 * Generated from protobuf field <code>bool always_compare_med = 1;</code>
	 * @return bool
	 */
	public function getAlwaysCompareMed()
	{
		return $this->always_compare_med;
	}

	/**
	 * Generated from protobuf field <code>bool always_compare_med = 1;</code>
	 * @param bool $var
	 * @return $this
	 */
	public function setAlwaysCompareMed($var)
	{
		GPBUtil::checkBool($var);
		$this->always_compare_med = $var;

		return $this;
	}

	/**
	 * Generated from protobuf field <code>bool ignore_as_path_length = 2;</code>
	 * @return bool
	 */
	public function getIgnoreAsPathLength()
	{
		return $this->ignore_as_path_length;
	}

	/**
	 * Generated from protobuf field <code>bool ignore_as_path_length = 2;</code>
	 * @param bool $var
	 * @return $this
	 */
	public function setIgnoreAsPathLength($var)
	{
		GPBUtil::checkBool($var);
		$this->ignore_as_path_length = $var;

		return $this;
	}

	/**
	 * Generated from protobuf field <code>bool external_compare_router_id = 3;</code>
	 * @return bool
	 */
	public function getExternalCompareRouterId()
	{
		return $this->external_compare_router_id;
	}

	/**
	 * Generated from protobuf field <code>bool external_compare_router_id = 3;</code>
	 * @param bool $var
	 * @return $this
	 */
	public function setExternalCompareRouterId($var)
	{
		GPBUtil::checkBool($var);
		$this->external_compare_router_id = $var;

		return $this;
	}

	/**
	 * Generated from protobuf field <code>bool advertise_inactive_routes = 4;</code>
	 * @return bool
	 */
	public function getAdvertiseInactiveRoutes()
	{
		return $this->advertise_inactive_routes;
	}

	/**
	 * Generated from protobuf field <code>bool advertise_inactive_routes = 4;</code>
	 * @param bool $var
	 * @return $this
	 */
	public function setAdvertiseInactiveRoutes($var)
	{
		GPBUtil::checkBool($var);
		$this->advertise_inactive_routes = $var;

		return $this;
	}

	/**
	 * Generated from protobuf field <code>bool enable_aigp = 5;</code>
	 * @return bool
	 */
	public function getEnableAigp()
	{
		return $this->enable_aigp;
	}

	/**
	 * Generated from protobuf field <code>bool enable_aigp = 5;</code>
	 * @param bool $var
	 * @return $this
	 */
	public function setEnableAigp($var)
	{
		GPBUtil::checkBool($var);
		$this->enable_aigp = $var;

		return $this;
	}

	/**
	 * Generated from protobuf field <code>bool ignore_next_hop_igp_metric = 6;</code>
	 * @return bool
	 */
	public function getIgnoreNextHopIgpMetric()
	{
		return $this->ignore_next_hop_igp_metric;
	}

	/**
	 * Generated from protobuf field <code>bool ignore_next_hop_igp_metric = 6;</code>
	 * @param bool $var
	 * @return $this
	 */
	public function setIgnoreNextHopIgpMetric($var)
	{
		GPBUtil::checkBool($var);
		$this->ignore_next_hop_igp_metric = $var;

		return $this;
	}

}

