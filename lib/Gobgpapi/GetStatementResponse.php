<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: gobgp.proto

namespace Gobgpapi;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>gobgpapi.GetStatementResponse</code>
 */
class GetStatementResponse extends \Google\Protobuf\Internal\Message
{
	/**
	 * Generated from protobuf field <code>repeated .gobgpapi.Statement statements = 1;</code>
	 */
	private $statements;

	public function __construct()
	{
		\GPBMetadata\Gobgp::initOnce();
		parent::__construct();
	}

	/**
	 * Generated from protobuf field <code>repeated .gobgpapi.Statement statements = 1;</code>
	 * @return \Google\Protobuf\Internal\RepeatedField
	 */
	public function getStatements()
	{
		return $this->statements;
	}

	/**
	 * Generated from protobuf field <code>repeated .gobgpapi.Statement statements = 1;</code>
	 * @param \Gobgpapi\Statement[]|\Google\Protobuf\Internal\RepeatedField $var
	 * @return $this
	 */
	public function setStatements($var)
	{
		$arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Gobgpapi\Statement::class);
		$this->statements = $arr;

		return $this;
	}

}
