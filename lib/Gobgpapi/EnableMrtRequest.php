<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: gobgp.proto

namespace Gobgpapi;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>gobgpapi.EnableMrtRequest</code>
 */
class EnableMrtRequest extends \Google\Protobuf\Internal\Message
{
	/**
	 * Generated from protobuf field <code>int32 dump_type = 1;</code>
	 */
	private $dump_type = 0;
	/**
	 * Generated from protobuf field <code>string filename = 2;</code>
	 */
	private $filename = '';
	/**
	 * Generated from protobuf field <code>uint64 interval = 3;</code>
	 */
	private $interval = 0;

	public function __construct()
	{
		\GPBMetadata\Gobgp::initOnce();
		parent::__construct();
	}

	/**
	 * Generated from protobuf field <code>int32 dump_type = 1;</code>
	 * @return int
	 */
	public function getDumpType()
	{
		return $this->dump_type;
	}

	/**
	 * Generated from protobuf field <code>int32 dump_type = 1;</code>
	 * @param int $var
	 * @return $this
	 */
	public function setDumpType($var)
	{
		GPBUtil::checkInt32($var);
		$this->dump_type = $var;

		return $this;
	}

	/**
	 * Generated from protobuf field <code>string filename = 2;</code>
	 * @return string
	 */
	public function getFilename()
	{
		return $this->filename;
	}

	/**
	 * Generated from protobuf field <code>string filename = 2;</code>
	 * @param string $var
	 * @return $this
	 */
	public function setFilename($var)
	{
		GPBUtil::checkString($var, True);
		$this->filename = $var;

		return $this;
	}

	/**
	 * Generated from protobuf field <code>uint64 interval = 3;</code>
	 * @return int|string
	 */
	public function getInterval()
	{
		return $this->interval;
	}

	/**
	 * Generated from protobuf field <code>uint64 interval = 3;</code>
	 * @param int|string $var
	 * @return $this
	 */
	public function setInterval($var)
	{
		GPBUtil::checkUint64($var);
		$this->interval = $var;

		return $this;
	}

}

