<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: gobgp.proto

namespace Gobgpapi;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>gobgpapi.PeerState</code>
 */
class PeerState extends \Google\Protobuf\Internal\Message
{
	/**
	 * Generated from protobuf field <code>string auth_password = 1;</code>
	 */
	private $auth_password = '';
	/**
	 * Generated from protobuf field <code>string description = 2;</code>
	 */
	private $description = '';
	/**
	 * Generated from protobuf field <code>uint32 local_as = 3;</code>
	 */
	private $local_as = 0;
	/**
	 * Generated from protobuf field <code>.gobgpapi.Messages messages = 4;</code>
	 */
	private $messages = null;
	/**
	 * Generated from protobuf field <code>string neighbor_address = 5;</code>
	 */
	private $neighbor_address = '';
	/**
	 * Generated from protobuf field <code>uint32 peer_as = 6;</code>
	 */
	private $peer_as = 0;
	/**
	 * Generated from protobuf field <code>string peer_group = 7;</code>
	 */
	private $peer_group = '';
	/**
	 * Generated from protobuf field <code>uint32 peer_type = 8;</code>
	 */
	private $peer_type = 0;
	/**
	 * Generated from protobuf field <code>.gobgpapi.Queues queues = 9;</code>
	 */
	private $queues = null;
	/**
	 * Generated from protobuf field <code>uint32 remove_private_as = 10;</code>
	 */
	private $remove_private_as = 0;
	/**
	 * Generated from protobuf field <code>bool route_flap_damping = 11;</code>
	 */
	private $route_flap_damping = false;
	/**
	 * Generated from protobuf field <code>uint32 send_community = 12;</code>
	 */
	private $send_community = 0;
	/**
	 * Generated from protobuf field <code>uint32 session_state = 13;</code>
	 */
	private $session_state = 0;
	/**
	 * Generated from protobuf field <code>repeated string supported_capabilities = 14;</code>
	 */
	private $supported_capabilities;
	/**
	 * Generated from protobuf field <code>string bgp_state = 15;</code>
	 */
	private $bgp_state = '';
	/**
	 * Generated from protobuf field <code>.gobgpapi.PeerState.AdminState admin_state = 16;</code>
	 */
	private $admin_state = 0;
	/**
	 * Generated from protobuf field <code>uint32 received = 17;</code>
	 */
	private $received = 0;
	/**
	 * Generated from protobuf field <code>uint32 accepted = 18;</code>
	 */
	private $accepted = 0;
	/**
	 * Generated from protobuf field <code>uint32 advertised = 19;</code>
	 */
	private $advertised = 0;
	/**
	 * Generated from protobuf field <code>uint32 out_q = 20;</code>
	 */
	private $out_q = 0;
	/**
	 * Generated from protobuf field <code>uint32 flops = 21;</code>
	 */
	private $flops = 0;

	public function __construct()
	{
		\GPBMetadata\Gobgp::initOnce();
		parent::__construct();
	}

	/**
	 * Generated from protobuf field <code>string auth_password = 1;</code>
	 * @return string
	 */
	public function getAuthPassword()
	{
		return $this->auth_password;
	}

	/**
	 * Generated from protobuf field <code>string auth_password = 1;</code>
	 * @param string $var
	 * @return $this
	 */
	public function setAuthPassword($var)
	{
		GPBUtil::checkString($var, True);
		$this->auth_password = $var;

		return $this;
	}

	/**
	 * Generated from protobuf field <code>string description = 2;</code>
	 * @return string
	 */
	public function getDescription()
	{
		return $this->description;
	}

	/**
	 * Generated from protobuf field <code>string description = 2;</code>
	 * @param string $var
	 * @return $this
	 */
	public function setDescription($var)
	{
		GPBUtil::checkString($var, True);
		$this->description = $var;

		return $this;
	}

	/**
	 * Generated from protobuf field <code>uint32 local_as = 3;</code>
	 * @return int
	 */
	public function getLocalAs()
	{
		return $this->local_as;
	}

	/**
	 * Generated from protobuf field <code>uint32 local_as = 3;</code>
	 * @param int $var
	 * @return $this
	 */
	public function setLocalAs($var)
	{
		GPBUtil::checkUint32($var);
		$this->local_as = $var;

		return $this;
	}

	/**
	 * Generated from protobuf field <code>.gobgpapi.Messages messages = 4;</code>
	 * @return \Gobgpapi\Messages
	 */
	public function getMessages()
	{
		return $this->messages;
	}

	/**
	 * Generated from protobuf field <code>.gobgpapi.Messages messages = 4;</code>
	 * @param \Gobgpapi\Messages $var
	 * @return $this
	 */
	public function setMessages($var)
	{
		GPBUtil::checkMessage($var, \Gobgpapi\Messages::class);
		$this->messages = $var;

		return $this;
	}

	/**
	 * Generated from protobuf field <code>string neighbor_address = 5;</code>
	 * @return string
	 */
	public function getNeighborAddress()
	{
		return $this->neighbor_address;
	}

	/**
	 * Generated from protobuf field <code>string neighbor_address = 5;</code>
	 * @param string $var
	 * @return $this
	 */
	public function setNeighborAddress($var)
	{
		GPBUtil::checkString($var, True);
		$this->neighbor_address = $var;

		return $this;
	}

	/**
	 * Generated from protobuf field <code>uint32 peer_as = 6;</code>
	 * @return int
	 */
	public function getPeerAs()
	{
		return $this->peer_as;
	}

	/**
	 * Generated from protobuf field <code>uint32 peer_as = 6;</code>
	 * @param int $var
	 * @return $this
	 */
	public function setPeerAs($var)
	{
		GPBUtil::checkUint32($var);
		$this->peer_as = $var;

		return $this;
	}

	/**
	 * Generated from protobuf field <code>string peer_group = 7;</code>
	 * @return string
	 */
	public function getPeerGroup()
	{
		return $this->peer_group;
	}

	/**
	 * Generated from protobuf field <code>string peer_group = 7;</code>
	 * @param string $var
	 * @return $this
	 */
	public function setPeerGroup($var)
	{
		GPBUtil::checkString($var, True);
		$this->peer_group = $var;

		return $this;
	}

	/**
	 * Generated from protobuf field <code>uint32 peer_type = 8;</code>
	 * @return int
	 */
	public function getPeerType()
	{
		return $this->peer_type;
	}

	/**
	 * Generated from protobuf field <code>uint32 peer_type = 8;</code>
	 * @param int $var
	 * @return $this
	 */
	public function setPeerType($var)
	{
		GPBUtil::checkUint32($var);
		$this->peer_type = $var;

		return $this;
	}

	/**
	 * Generated from protobuf field <code>.gobgpapi.Queues queues = 9;</code>
	 * @return \Gobgpapi\Queues
	 */
	public function getQueues()
	{
		return $this->queues;
	}

	/**
	 * Generated from protobuf field <code>.gobgpapi.Queues queues = 9;</code>
	 * @param \Gobgpapi\Queues $var
	 * @return $this
	 */
	public function setQueues($var)
	{
		GPBUtil::checkMessage($var, \Gobgpapi\Queues::class);
		$this->queues = $var;

		return $this;
	}

	/**
	 * Generated from protobuf field <code>uint32 remove_private_as = 10;</code>
	 * @return int
	 */
	public function getRemovePrivateAs()
	{
		return $this->remove_private_as;
	}

	/**
	 * Generated from protobuf field <code>uint32 remove_private_as = 10;</code>
	 * @param int $var
	 * @return $this
	 */
	public function setRemovePrivateAs($var)
	{
		GPBUtil::checkUint32($var);
		$this->remove_private_as = $var;

		return $this;
	}

	/**
	 * Generated from protobuf field <code>bool route_flap_damping = 11;</code>
	 * @return bool
	 */
	public function getRouteFlapDamping()
	{
		return $this->route_flap_damping;
	}

	/**
	 * Generated from protobuf field <code>bool route_flap_damping = 11;</code>
	 * @param bool $var
	 * @return $this
	 */
	public function setRouteFlapDamping($var)
	{
		GPBUtil::checkBool($var);
		$this->route_flap_damping = $var;

		return $this;
	}

	/**
	 * Generated from protobuf field <code>uint32 send_community = 12;</code>
	 * @return int
	 */
	public function getSendCommunity()
	{
		return $this->send_community;
	}

	/**
	 * Generated from protobuf field <code>uint32 send_community = 12;</code>
	 * @param int $var
	 * @return $this
	 */
	public function setSendCommunity($var)
	{
		GPBUtil::checkUint32($var);
		$this->send_community = $var;

		return $this;
	}

	/**
	 * Generated from protobuf field <code>uint32 session_state = 13;</code>
	 * @return int
	 */
	public function getSessionState()
	{
		return $this->session_state;
	}

	/**
	 * Generated from protobuf field <code>uint32 session_state = 13;</code>
	 * @param int $var
	 * @return $this
	 */
	public function setSessionState($var)
	{
		GPBUtil::checkUint32($var);
		$this->session_state = $var;

		return $this;
	}

	/**
	 * Generated from protobuf field <code>repeated string supported_capabilities = 14;</code>
	 * @return \Google\Protobuf\Internal\RepeatedField
	 */
	public function getSupportedCapabilities()
	{
		return $this->supported_capabilities;
	}

	/**
	 * Generated from protobuf field <code>repeated string supported_capabilities = 14;</code>
	 * @param string[]|\Google\Protobuf\Internal\RepeatedField $var
	 * @return $this
	 */
	public function setSupportedCapabilities($var)
	{
		$arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
		$this->supported_capabilities = $arr;

		return $this;
	}

	/**
	 * Generated from protobuf field <code>string bgp_state = 15;</code>
	 * @return string
	 */
	public function getBgpState()
	{
		return $this->bgp_state;
	}

	/**
	 * Generated from protobuf field <code>string bgp_state = 15;</code>
	 * @param string $var
	 * @return $this
	 */
	public function setBgpState($var)
	{
		GPBUtil::checkString($var, True);
		$this->bgp_state = $var;

		return $this;
	}

	/**
	 * Generated from protobuf field <code>.gobgpapi.PeerState.AdminState admin_state = 16;</code>
	 * @return int
	 */
	public function getAdminState()
	{
		return $this->admin_state;
	}

	/**
	 * Generated from protobuf field <code>.gobgpapi.PeerState.AdminState admin_state = 16;</code>
	 * @param int $var
	 * @return $this
	 */
	public function setAdminState($var)
	{
		GPBUtil::checkEnum($var, \Gobgpapi\PeerState_AdminState::class);
		$this->admin_state = $var;

		return $this;
	}

	/**
	 * Generated from protobuf field <code>uint32 received = 17;</code>
	 * @return int
	 */
	public function getReceived()
	{
		return $this->received;
	}

	/**
	 * Generated from protobuf field <code>uint32 received = 17;</code>
	 * @param int $var
	 * @return $this
	 */
	public function setReceived($var)
	{
		GPBUtil::checkUint32($var);
		$this->received = $var;

		return $this;
	}

	/**
	 * Generated from protobuf field <code>uint32 accepted = 18;</code>
	 * @return int
	 */
	public function getAccepted()
	{
		return $this->accepted;
	}

	/**
	 * Generated from protobuf field <code>uint32 accepted = 18;</code>
	 * @param int $var
	 * @return $this
	 */
	public function setAccepted($var)
	{
		GPBUtil::checkUint32($var);
		$this->accepted = $var;

		return $this;
	}

	/**
	 * Generated from protobuf field <code>uint32 advertised = 19;</code>
	 * @return int
	 */
	public function getAdvertised()
	{
		return $this->advertised;
	}

	/**
	 * Generated from protobuf field <code>uint32 advertised = 19;</code>
	 * @param int $var
	 * @return $this
	 */
	public function setAdvertised($var)
	{
		GPBUtil::checkUint32($var);
		$this->advertised = $var;

		return $this;
	}

	/**
	 * Generated from protobuf field <code>uint32 out_q = 20;</code>
	 * @return int
	 */
	public function getOutQ()
	{
		return $this->out_q;
	}

	/**
	 * Generated from protobuf field <code>uint32 out_q = 20;</code>
	 * @param int $var
	 * @return $this
	 */
	public function setOutQ($var)
	{
		GPBUtil::checkUint32($var);
		$this->out_q = $var;

		return $this;
	}

	/**
	 * Generated from protobuf field <code>uint32 flops = 21;</code>
	 * @return int
	 */
	public function getFlops()
	{
		return $this->flops;
	}

	/**
	 * Generated from protobuf field <code>uint32 flops = 21;</code>
	 * @param int $var
	 * @return $this
	 */
	public function setFlops($var)
	{
		GPBUtil::checkUint32($var);
		$this->flops = $var;

		return $this;
	}

}

