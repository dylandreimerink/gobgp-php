<?php
/**
 * Created by PhpStorm.
 * User: caveman
 * Date: 11/1/17
 * Time: 11:54 PM
 */

namespace Gobgp\Bgp;


use Gobgp\Enum;

class SAFI extends Enum
{
	const UNICAST = 1;
	const MULTICAST = 2;
	const MPLS_LABEL = 4;
	const ENCAPSULATION = 7;
	const VPLS = 65;
	const EVPN = 70;
	const MPLS_VPN = 128;
	const MPLS_VPN_MULTICAST = 129;
	const ROUTE_TARGET_CONSTRAINTS = 132;
	const FLOW_SPEC_UNICAST = 133;
	const FLOW_SPEC_VPN = 134;
	const KEY_VALUE = 241;
}