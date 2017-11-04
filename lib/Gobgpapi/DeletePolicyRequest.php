<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: gobgp.proto

namespace Gobgpapi;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>gobgpapi.DeletePolicyRequest</code>
 */
class DeletePolicyRequest extends \Google\Protobuf\Internal\Message
{
	/**
	 * Generated from protobuf field <code>.gobgpapi.Policy policy = 1;</code>
	 */
	private $policy = null;
	/**
	 * if this flag is set, gobgpd won't delete any statements
	 * even if some statements get not used by any policy by this operation.
	 *
	 * Generated from protobuf field <code>bool preserve_statements = 2;</code>
	 */
	private $preserve_statements = false;
	/**
	 * Generated from protobuf field <code>bool all = 3;</code>
	 */
	private $all = false;

	public function __construct()
	{
		\GPBMetadata\Gobgp::initOnce();
		parent::__construct();
	}

	/**
	 * Generated from protobuf field <code>.gobgpapi.Policy policy = 1;</code>
	 * @return \Gobgpapi\Policy
	 */
	public function getPolicy()
	{
		return $this->policy;
	}

	/**
	 * Generated from protobuf field <code>.gobgpapi.Policy policy = 1;</code>
	 * @param \Gobgpapi\Policy $var
	 * @return $this
	 */
	public function setPolicy($var)
	{
		GPBUtil::checkMessage($var, \Gobgpapi\Policy::class);
		$this->policy = $var;

		return $this;
	}

	/**
	 * if this flag is set, gobgpd won't delete any statements
	 * even if some statements get not used by any policy by this operation.
	 *
	 * Generated from protobuf field <code>bool preserve_statements = 2;</code>
	 * @return bool
	 */
	public function getPreserveStatements()
	{
		return $this->preserve_statements;
	}

	/**
	 * if this flag is set, gobgpd won't delete any statements
	 * even if some statements get not used by any policy by this operation.
	 *
	 * Generated from protobuf field <code>bool preserve_statements = 2;</code>
	 * @param bool $var
	 * @return $this
	 */
	public function setPreserveStatements($var)
	{
		GPBUtil::checkBool($var);
		$this->preserve_statements = $var;

		return $this;
	}

	/**
	 * Generated from protobuf field <code>bool all = 3;</code>
	 * @return bool
	 */
	public function getAll()
	{
		return $this->all;
	}

	/**
	 * Generated from protobuf field <code>bool all = 3;</code>
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
