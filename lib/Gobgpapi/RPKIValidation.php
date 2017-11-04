<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: gobgp.proto

namespace Gobgpapi;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>gobgpapi.RPKIValidation</code>
 */
class RPKIValidation extends \Google\Protobuf\Internal\Message
{
	/**
	 * Generated from protobuf field <code>.gobgpapi.RPKIValidation.State state = 1;</code>
	 */
	private $state = 0;
	/**
	 * Generated from protobuf field <code>.gobgpapi.RPKIValidation.Reason reason = 2;</code>
	 */
	private $reason = 0;
	/**
	 * Generated from protobuf field <code>repeated .gobgpapi.Roa matched = 3;</code>
	 */
	private $matched;
	/**
	 * Generated from protobuf field <code>repeated .gobgpapi.Roa unmatched_as = 4;</code>
	 */
	private $unmatched_as;
	/**
	 * Generated from protobuf field <code>repeated .gobgpapi.Roa unmatched_length = 5;</code>
	 */
	private $unmatched_length;

	public function __construct()
	{
		\GPBMetadata\Gobgp::initOnce();
		parent::__construct();
	}

	/**
	 * Generated from protobuf field <code>.gobgpapi.RPKIValidation.State state = 1;</code>
	 * @return int
	 */
	public function getState()
	{
		return $this->state;
	}

	/**
	 * Generated from protobuf field <code>.gobgpapi.RPKIValidation.State state = 1;</code>
	 * @param int $var
	 * @return $this
	 */
	public function setState($var)
	{
		GPBUtil::checkEnum($var, \Gobgpapi\RPKIValidation_State::class);
		$this->state = $var;

		return $this;
	}

	/**
	 * Generated from protobuf field <code>.gobgpapi.RPKIValidation.Reason reason = 2;</code>
	 * @return int
	 */
	public function getReason()
	{
		return $this->reason;
	}

	/**
	 * Generated from protobuf field <code>.gobgpapi.RPKIValidation.Reason reason = 2;</code>
	 * @param int $var
	 * @return $this
	 */
	public function setReason($var)
	{
		GPBUtil::checkEnum($var, \Gobgpapi\RPKIValidation_Reason::class);
		$this->reason = $var;

		return $this;
	}

	/**
	 * Generated from protobuf field <code>repeated .gobgpapi.Roa matched = 3;</code>
	 * @return \Google\Protobuf\Internal\RepeatedField
	 */
	public function getMatched()
	{
		return $this->matched;
	}

	/**
	 * Generated from protobuf field <code>repeated .gobgpapi.Roa matched = 3;</code>
	 * @param \Gobgpapi\Roa[]|\Google\Protobuf\Internal\RepeatedField $var
	 * @return $this
	 */
	public function setMatched($var)
	{
		$arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Gobgpapi\Roa::class);
		$this->matched = $arr;

		return $this;
	}

	/**
	 * Generated from protobuf field <code>repeated .gobgpapi.Roa unmatched_as = 4;</code>
	 * @return \Google\Protobuf\Internal\RepeatedField
	 */
	public function getUnmatchedAs()
	{
		return $this->unmatched_as;
	}

	/**
	 * Generated from protobuf field <code>repeated .gobgpapi.Roa unmatched_as = 4;</code>
	 * @param \Gobgpapi\Roa[]|\Google\Protobuf\Internal\RepeatedField $var
	 * @return $this
	 */
	public function setUnmatchedAs($var)
	{
		$arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Gobgpapi\Roa::class);
		$this->unmatched_as = $arr;

		return $this;
	}

	/**
	 * Generated from protobuf field <code>repeated .gobgpapi.Roa unmatched_length = 5;</code>
	 * @return \Google\Protobuf\Internal\RepeatedField
	 */
	public function getUnmatchedLength()
	{
		return $this->unmatched_length;
	}

	/**
	 * Generated from protobuf field <code>repeated .gobgpapi.Roa unmatched_length = 5;</code>
	 * @param \Gobgpapi\Roa[]|\Google\Protobuf\Internal\RepeatedField $var
	 * @return $this
	 */
	public function setUnmatchedLength($var)
	{
		$arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Gobgpapi\Roa::class);
		$this->unmatched_length = $arr;

		return $this;
	}

}

