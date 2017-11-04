<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: gobgp.proto

namespace Gobgpapi;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>gobgpapi.DeletePathRequest</code>
 */
class DeletePathRequest extends \Google\Protobuf\Internal\Message
{
	/**
	 * Generated from protobuf field <code>.gobgpapi.Resource resource = 1;</code>
	 */
	private $resource = 0;
	/**
	 * Generated from protobuf field <code>string vrf_id = 2;</code>
	 */
	private $vrf_id = '';
	/**
	 * Generated from protobuf field <code>uint32 family = 3;</code>
	 */
	private $family = 0;
	/**
	 * Generated from protobuf field <code>.gobgpapi.Path path = 4;</code>
	 */
	private $path = null;
	/**
	 * Generated from protobuf field <code>bytes uuid = 5;</code>
	 */
	private $uuid = '';

	public function __construct()
	{
		\GPBMetadata\Gobgp::initOnce();
		parent::__construct();
	}

	/**
	 * Generated from protobuf field <code>.gobgpapi.Resource resource = 1;</code>
	 * @return int
	 */
	public function getResource()
	{
		return $this->resource;
	}

	/**
	 * Generated from protobuf field <code>.gobgpapi.Resource resource = 1;</code>
	 * @param int $var
	 * @return $this
	 */
	public function setResource($var)
	{
		GPBUtil::checkEnum($var, \Gobgpapi\Resource::class);
		$this->resource = $var;

		return $this;
	}

	/**
	 * Generated from protobuf field <code>string vrf_id = 2;</code>
	 * @return string
	 */
	public function getVrfId()
	{
		return $this->vrf_id;
	}

	/**
	 * Generated from protobuf field <code>string vrf_id = 2;</code>
	 * @param string $var
	 * @return $this
	 */
	public function setVrfId($var)
	{
		GPBUtil::checkString($var, True);
		$this->vrf_id = $var;

		return $this;
	}

	/**
	 * Generated from protobuf field <code>uint32 family = 3;</code>
	 * @return int
	 */
	public function getFamily()
	{
		return $this->family;
	}

	/**
	 * Generated from protobuf field <code>uint32 family = 3;</code>
	 * @param int $var
	 * @return $this
	 */
	public function setFamily($var)
	{
		GPBUtil::checkUint32($var);
		$this->family = $var;

		return $this;
	}

	/**
	 * Generated from protobuf field <code>.gobgpapi.Path path = 4;</code>
	 * @return \Gobgpapi\Path
	 */
	public function getPath()
	{
		return $this->path;
	}

	/**
	 * Generated from protobuf field <code>.gobgpapi.Path path = 4;</code>
	 * @param \Gobgpapi\Path $var
	 * @return $this
	 */
	public function setPath($var)
	{
		GPBUtil::checkMessage($var, \Gobgpapi\Path::class);
		$this->path = $var;

		return $this;
	}

	/**
	 * Generated from protobuf field <code>bytes uuid = 5;</code>
	 * @return string
	 */
	public function getUuid()
	{
		return $this->uuid;
	}

	/**
	 * Generated from protobuf field <code>bytes uuid = 5;</code>
	 * @param string $var
	 * @return $this
	 */
	public function setUuid($var)
	{
		GPBUtil::checkString($var, False);
		$this->uuid = $var;

		return $this;
	}

}
