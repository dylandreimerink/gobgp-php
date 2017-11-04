<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: gobgp.proto

namespace Gobgpapi;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>gobgpapi.UseMultiplePaths</code>
 */
class UseMultiplePaths extends \Google\Protobuf\Internal\Message
{
	/**
	 * Generated from protobuf field <code>.gobgpapi.UseMultiplePathsConfig config = 1;</code>
	 */
	private $config = null;
	/**
	 * Generated from protobuf field <code>.gobgpapi.UseMultiplePathsState state = 2;</code>
	 */
	private $state = null;
	/**
	 * Generated from protobuf field <code>.gobgpapi.Ebgp ebgp = 3;</code>
	 */
	private $ebgp = null;
	/**
	 * Generated from protobuf field <code>.gobgpapi.Ibgp ibgp = 4;</code>
	 */
	private $ibgp = null;

	public function __construct()
	{
		\GPBMetadata\Gobgp::initOnce();
		parent::__construct();
	}

	/**
	 * Generated from protobuf field <code>.gobgpapi.UseMultiplePathsConfig config = 1;</code>
	 * @return \Gobgpapi\UseMultiplePathsConfig
	 */
	public function getConfig()
	{
		return $this->config;
	}

	/**
	 * Generated from protobuf field <code>.gobgpapi.UseMultiplePathsConfig config = 1;</code>
	 * @param \Gobgpapi\UseMultiplePathsConfig $var
	 * @return $this
	 */
	public function setConfig($var)
	{
		GPBUtil::checkMessage($var, \Gobgpapi\UseMultiplePathsConfig::class);
		$this->config = $var;

		return $this;
	}

	/**
	 * Generated from protobuf field <code>.gobgpapi.UseMultiplePathsState state = 2;</code>
	 * @return \Gobgpapi\UseMultiplePathsState
	 */
	public function getState()
	{
		return $this->state;
	}

	/**
	 * Generated from protobuf field <code>.gobgpapi.UseMultiplePathsState state = 2;</code>
	 * @param \Gobgpapi\UseMultiplePathsState $var
	 * @return $this
	 */
	public function setState($var)
	{
		GPBUtil::checkMessage($var, \Gobgpapi\UseMultiplePathsState::class);
		$this->state = $var;

		return $this;
	}

	/**
	 * Generated from protobuf field <code>.gobgpapi.Ebgp ebgp = 3;</code>
	 * @return \Gobgpapi\Ebgp
	 */
	public function getEbgp()
	{
		return $this->ebgp;
	}

	/**
	 * Generated from protobuf field <code>.gobgpapi.Ebgp ebgp = 3;</code>
	 * @param \Gobgpapi\Ebgp $var
	 * @return $this
	 */
	public function setEbgp($var)
	{
		GPBUtil::checkMessage($var, \Gobgpapi\Ebgp::class);
		$this->ebgp = $var;

		return $this;
	}

	/**
	 * Generated from protobuf field <code>.gobgpapi.Ibgp ibgp = 4;</code>
	 * @return \Gobgpapi\Ibgp
	 */
	public function getIbgp()
	{
		return $this->ibgp;
	}

	/**
	 * Generated from protobuf field <code>.gobgpapi.Ibgp ibgp = 4;</code>
	 * @param \Gobgpapi\Ibgp $var
	 * @return $this
	 */
	public function setIbgp($var)
	{
		GPBUtil::checkMessage($var, \Gobgpapi\Ibgp::class);
		$this->ibgp = $var;

		return $this;
	}

}

