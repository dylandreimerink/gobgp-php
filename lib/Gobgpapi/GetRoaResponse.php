<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: gobgp.proto

namespace Gobgpapi;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>gobgpapi.GetRoaResponse</code>
 */
class GetRoaResponse extends \Google\Protobuf\Internal\Message
{
	/**
	 * Generated from protobuf field <code>repeated .gobgpapi.Roa roas = 1;</code>
	 */
	private $roas;

	public function __construct()
	{
		\GPBMetadata\Gobgp::initOnce();
		parent::__construct();
	}

	/**
	 * Generated from protobuf field <code>repeated .gobgpapi.Roa roas = 1;</code>
	 * @return \Google\Protobuf\Internal\RepeatedField
	 */
	public function getRoas()
	{
		return $this->roas;
	}

	/**
	 * Generated from protobuf field <code>repeated .gobgpapi.Roa roas = 1;</code>
	 * @param \Gobgpapi\Roa[]|\Google\Protobuf\Internal\RepeatedField $var
	 * @return $this
	 */
	public function setRoas($var)
	{
		$arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Gobgpapi\Roa::class);
		$this->roas = $arr;

		return $this;
	}

}

