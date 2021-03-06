<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: gobgp.proto

namespace Gobgpapi;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>gobgpapi.Vrf</code>
 */
class Vrf extends \Google\Protobuf\Internal\Message
{
	/**
	 * Generated from protobuf field <code>string name = 1;</code>
	 */
	private $name = '';
	/**
	 * Generated from protobuf field <code>bytes rd = 2;</code>
	 */
	private $rd = '';
	/**
	 * Generated from protobuf field <code>repeated bytes import_rt = 3;</code>
	 */
	private $import_rt;
	/**
	 * Generated from protobuf field <code>repeated bytes export_rt = 4;</code>
	 */
	private $export_rt;
	/**
	 * Generated from protobuf field <code>uint32 id = 5;</code>
	 */
	private $id = 0;

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
	 * Generated from protobuf field <code>bytes rd = 2;</code>
	 * @return string
	 */
	public function getRd()
	{
		return $this->rd;
	}

	/**
	 * Generated from protobuf field <code>bytes rd = 2;</code>
	 * @param string $var
	 * @return $this
	 */
	public function setRd($var)
	{
		GPBUtil::checkString($var, False);
		$this->rd = $var;

		return $this;
	}

	/**
	 * Generated from protobuf field <code>repeated bytes import_rt = 3;</code>
	 * @return \Google\Protobuf\Internal\RepeatedField
	 */
	public function getImportRt()
	{
		return $this->import_rt;
	}

	/**
	 * Generated from protobuf field <code>repeated bytes import_rt = 3;</code>
	 * @param string[]|\Google\Protobuf\Internal\RepeatedField $var
	 * @return $this
	 */
	public function setImportRt($var)
	{
		$arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::BYTES);
		$this->import_rt = $arr;

		return $this;
	}

	/**
	 * Generated from protobuf field <code>repeated bytes export_rt = 4;</code>
	 * @return \Google\Protobuf\Internal\RepeatedField
	 */
	public function getExportRt()
	{
		return $this->export_rt;
	}

	/**
	 * Generated from protobuf field <code>repeated bytes export_rt = 4;</code>
	 * @param string[]|\Google\Protobuf\Internal\RepeatedField $var
	 * @return $this
	 */
	public function setExportRt($var)
	{
		$arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::BYTES);
		$this->export_rt = $arr;

		return $this;
	}

	/**
	 * Generated from protobuf field <code>uint32 id = 5;</code>
	 * @return int
	 */
	public function getId()
	{
		return $this->id;
	}

	/**
	 * Generated from protobuf field <code>uint32 id = 5;</code>
	 * @param int $var
	 * @return $this
	 */
	public function setId($var)
	{
		GPBUtil::checkUint32($var);
		$this->id = $var;

		return $this;
	}

}

