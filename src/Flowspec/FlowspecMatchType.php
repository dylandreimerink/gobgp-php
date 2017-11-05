<?php

namespace Gobgp\Flowspec;

use Gobgp\Enum;

/**
 * Created by PhpStorm.
 * User: caveman
 * Date: 11/2/17
 * Time: 10:07 PM
 */

// #1-12 Based on https://tools.ietf.org/html/rfc5575 - 4.  Dissemination of Information
// #0 based on GoBGP source code
// #13 based on https://tools.ietf.org/html/draft-ietf-idr-flow-spec-v6-08
// #14-24 based on https://tools.ietf.org/html/draft-ietf-idr-flowspec-l2vpn-07
class FlowspecMatchType extends Enum
{
	//Officialy unused
	const UNKNOWN = 0;

	//Unicast matches
	const DST_PREFIX    = 1; //IPv4 and IPv6
	const SRC_PREFIX    = 2; //IPv4 and IPv6
	const IP_PROTO      = 3; //IPv4 and IPv6, In IPv6 it matches the last 'Next header'
	const PORT          = 4; //TCP
	const DST_PORT      = 5; //TCP
	const SRC_PORT      = 6; //TCP
	const ICMP_TYPE     = 7; //ICMP
	const ICMP_CODE     = 8; //ICMP
	const TCP_FLAG      = 9; //TCP
	const PKT_LEN       = 10;//IPv4 and IPv6, length of L3 packet including header
	const DSCP          = 11;//IPv4
	const FRAGMENT      = 12;//IPv4

	//IPv6 only
	const LABEL         = 13;//IPv6

	//L2VPN only
	const ETHERNET_TYPE = 14;//L2VPN
	const SRC_MAC       = 15;//L2VPN
	const DST_MAC       = 16;//L2VPN
	const LLC_DSAP      = 17;//L2VPN
	const LLC_SSAP      = 18;//L2VPN
	const LLC_CONTROL   = 19;//L2VPN
	const SNAP          = 20;//L2VPN
	const VID           = 21;//L2VPN
	const COS           = 22;//L2VPN
	const INNER_VID     = 23;//L2VPN
	const INNER_COS     = 24;//L2VPN
}