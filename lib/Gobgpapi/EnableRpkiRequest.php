<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: gobgp.proto

namespace Gobgpapi;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>gobgpapi.EnableRpkiRequest</code>
 */
class EnableRpkiRequest extends \Google\Protobuf\Internal\Message
{
	/**
	 * Generated from protobuf field <code>string address = 1;</code>
	 */
	private $address = '';

	public function __construct()
	{
		\GPBMetadata\Gobgp::initOnce();
		parent::__construct();
	}

	/**
	 * Generated from protobuf field <code>string address = 1;</code>
	 * @return string
	 */
	public function getAddress()
	{
		return $this->address;
	}

	/**
	 * Generated from protobuf field <code>string address = 1;</code>
	 * @param string $var
	 * @return $this
	 */
	public function setAddress($var)
	{
		GPBUtil::checkString($var, True);
		$this->address = $var;

		return $this;
	}

}

