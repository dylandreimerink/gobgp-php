<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: gobgp.proto

namespace Gobgpapi;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>gobgpapi.GetRpkiResponse</code>
 */
class GetRpkiResponse extends \Google\Protobuf\Internal\Message
{
	/**
	 * Generated from protobuf field <code>repeated .gobgpapi.Rpki servers = 1;</code>
	 */
	private $servers;

	public function __construct()
	{
		\GPBMetadata\Gobgp::initOnce();
		parent::__construct();
	}

	/**
	 * Generated from protobuf field <code>repeated .gobgpapi.Rpki servers = 1;</code>
	 * @return \Google\Protobuf\Internal\RepeatedField
	 */
	public function getServers()
	{
		return $this->servers;
	}

	/**
	 * Generated from protobuf field <code>repeated .gobgpapi.Rpki servers = 1;</code>
	 * @param \Gobgpapi\Rpki[]|\Google\Protobuf\Internal\RepeatedField $var
	 * @return $this
	 */
	public function setServers($var)
	{
		$arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Gobgpapi\Rpki::class);
		$this->servers = $arr;

		return $this;
	}

}
