<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: gobgp.proto

namespace Gobgpapi;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>gobgpapi.DeletePolicyAssignmentRequest</code>
 */
class DeletePolicyAssignmentRequest extends \Google\Protobuf\Internal\Message
{
	/**
	 * Generated from protobuf field <code>.gobgpapi.PolicyAssignment assignment = 1;</code>
	 */
	private $assignment = null;
	/**
	 * Generated from protobuf field <code>bool all = 2;</code>
	 */
	private $all = false;

	public function __construct()
	{
		\GPBMetadata\Gobgp::initOnce();
		parent::__construct();
	}

	/**
	 * Generated from protobuf field <code>.gobgpapi.PolicyAssignment assignment = 1;</code>
	 * @return \Gobgpapi\PolicyAssignment
	 */
	public function getAssignment()
	{
		return $this->assignment;
	}

	/**
	 * Generated from protobuf field <code>.gobgpapi.PolicyAssignment assignment = 1;</code>
	 * @param \Gobgpapi\PolicyAssignment $var
	 * @return $this
	 */
	public function setAssignment($var)
	{
		GPBUtil::checkMessage($var, \Gobgpapi\PolicyAssignment::class);
		$this->assignment = $var;

		return $this;
	}

	/**
	 * Generated from protobuf field <code>bool all = 2;</code>
	 * @return bool
	 */
	public function getAll()
	{
		return $this->all;
	}

	/**
	 * Generated from protobuf field <code>bool all = 2;</code>
	 * @param bool $var
	 * @return $this
	 */
	public function setAll($var)
	{
		GPBUtil::checkBool($var);
		$this->all = $var;

		return $this;
	}

}
