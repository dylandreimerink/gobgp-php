<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: gobgp.proto

namespace Gobgpapi;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>gobgpapi.Messages</code>
 */
class Messages extends \Google\Protobuf\Internal\Message
{
	/**
	 * Generated from protobuf field <code>.gobgpapi.Message received = 1;</code>
	 */
	private $received = null;
	/**
	 * Generated from protobuf field <code>.gobgpapi.Message sent = 2;</code>
	 */
	private $sent = null;

	public function __construct()
	{
		\GPBMetadata\Gobgp::initOnce();
		parent::__construct();
	}

	/**
	 * Generated from protobuf field <code>.gobgpapi.Message received = 1;</code>
	 * @return \Gobgpapi\Message
	 */
	public function getReceived()
	{
		return $this->received;
	}

	/**
	 * Generated from protobuf field <code>.gobgpapi.Message received = 1;</code>
	 * @param \Gobgpapi\Message $var
	 * @return $this
	 */
	public function setReceived($var)
	{
		GPBUtil::checkMessage($var, \Gobgpapi\Message::class);
		$this->received = $var;

		return $this;
	}

	/**
	 * Generated from protobuf field <code>.gobgpapi.Message sent = 2;</code>
	 * @return \Gobgpapi\Message
	 */
	public function getSent()
	{
		return $this->sent;
	}

	/**
	 * Generated from protobuf field <code>.gobgpapi.Message sent = 2;</code>
	 * @param \Gobgpapi\Message $var
	 * @return $this
	 */
	public function setSent($var)
	{
		GPBUtil::checkMessage($var, \Gobgpapi\Message::class);
		$this->sent = $var;

		return $this;
	}

}

