<?php
/**
 * Created by PhpStorm.
 * User: caveman
 * Date: 11/1/17
 * Time: 11:50 PM
 */

namespace Gobgp\Bgp;


use Gobgp\Enum;

class RouteFamily extends Enum
{
	const IPv4_UNICAST = AFI::IP << 16 | SAFI::UNICAST;
	const IPv6_UNICAST = AFI::IP6 << 16 | SAFI::UNICAST;
	const IPv4_MULTICAST = AFI::IP << 16 | SAFI::MULTICAST;
	const IPv6_MULTICAST = AFI::IP6 << 16 | SAFI::MULTICAST;
	const IPv4_VPN = AFI::IP << 16 | SAFI::MPLS_VPN;
	const IPv6_VPN = AFI::IP6 << 16 | SAFI::MPLS_VPN;
	const IPv4_VPN_MULTICAST = AFI::IP << 16 | SAFI::MPLS_VPN_MULTICAST;
	const IPv6_VPN_MULTICAST = AFI::IP6 << 16 | SAFI::MPLS_VPN_MULTICAST;
	const IPv4_MPLS = AFI::IP << 16 | SAFI::MPLS_LABEL;
	const IPv6_MPLS = AFI::IP6 << 16 | SAFI::MPLS_LABEL;
	const VPLS = AFI::L2VPN << 16 | SAFI::VPLS;
	const EVPN = AFI::L2VPN << 16 | SAFI::EVPN;
	const RTC_UNICAST = AFI::IP << 16 | SAFI::ROUTE_TARGET_CONSTRAINTS;
	const IPv4_ENCAP = AFI::IP << 16 | SAFI::ENCAPSULATION;
	const IPv6_ENCAP = AFI::IP6 << 16 | SAFI::ENCAPSULATION;
	const FLOWSPEC_IPv4_UNICAST = AFI::IP << 16 | SAFI::FLOW_SPEC_UNICAST;
	const FLOWSPEC_IPv4_VPN = AFI::IP << 16 | SAFI::FLOW_SPEC_VPN;
	const FLOWSPEC_IPv6_UNICAST = AFI::IP6 << 16 | SAFI::FLOW_SPEC_UNICAST;
	const FLOWSPEC_IPv6_VPN = AFI::IP6 << 16 | SAFI::FLOW_SPEC_VPN;
	const FLOWSPEC_L2_VPN = AFI::L2VPN << 16 | SAFI::FLOW_SPEC_VPN;
	const OPAQUE = AFI::OPAQUE << 16 | SAFI::KEY_VALUE;


}