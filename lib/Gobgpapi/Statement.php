<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: gobgp.proto

namespace Gobgpapi;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>gobgpapi.Statement</code>
 */
class Statement extends \Google\Protobuf\Internal\Message
{
	/**
	 * Generated from protobuf field <code>string name = 1;</code>
	 */
	private $name = '';
	/**
	 * Generated from protobuf field <code>.gobgpapi.Conditions conditions = 2;</code>
	 */
	private $conditions = null;
	/**
	 * Generated from protobuf field <code>.gobgpapi.Actions actions = 3;</code>
	 */
	private $actions = null;

	public function __construct()
	{
		\GPBMetadata\Gobgp::initOnce();
		parent::__construct();
	}

	/**
	 * Generated from protobuf field <code>string name = 1;</code>
	 * @return string
	 */
	public function getName()
	{
		return $this->name;
	}

	/**
	 * Generated from protobuf field <code>string name = 1;</code>
	 * @param string $var
	 * @return $this
	 */
	public function setName($var)
	{
		GPBUtil::checkString($var, True);
		$this->name = $var;

		return $this;
	}

	/**
	 * Generated from protobuf field <code>.gobgpapi.Conditions conditions = 2;</code>
	 * @return \Gobgpapi\Conditions
	 */
	public function getConditions()
	{
		return $this->conditions;
	}

	/**
	 * Generated from protobuf field <code>.gobgpapi.Conditions conditions = 2;</code>
	 * @param \Gobgpapi\Conditions $var
	 * @return $this
	 */
	public function setConditions($var)
	{
		GPBUtil::checkMessage($var, \Gobgpapi\Conditions::class);
		$this->conditions = $var;

		return $this;
	}

	/**
	 * Generated from protobuf field <code>.gobgpapi.Actions actions = 3;</code>
	 * @return \Gobgpapi\Actions
	 */
	public function getActions()
	{
		return $this->actions;
	}

	/**
	 * Generated from protobuf field <code>.gobgpapi.Actions actions = 3;</code>
	 * @param \Gobgpapi\Actions $var
	 * @return $this
	 */
	public function setActions($var)
	{
		GPBUtil::checkMessage($var, \Gobgpapi\Actions::class);
		$this->actions = $var;

		return $this;
	}

}

