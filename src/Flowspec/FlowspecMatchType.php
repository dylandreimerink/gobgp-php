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
// #0, 13-24 based on GoBGP source code
class FlowspecMatchType extends Enum
{
	const UNKNOWN = 0;
	const DST_PREFIX = 1;
	const SRC_PREFIX = 2;
	const IP_PROTO = 3;
	const PORT = 4;
	const DST_PORT = 5;
	const SRC_PORT = 6;
	const ICMP_TYPE = 7;
	const ICMP_CODE = 8;
	const TCP_FLAG = 9;
	const PKT_LEN = 10;
	const DSCP = 11;
	const FRAGMENT = 12;

	const LABEL = 13;
	const ETHERNET_TYPE = 14;
	const SRC_MAC = 15;
	const DST_MAC = 16;
	const LLC_DSAP = 17;
	const LLC_SSAP = 18;
	const LLC_CONTROL = 19;
	const SNAP = 20;
	const VID = 21;
	const COS = 22;
	const INNER_VID = 23;
	const INNER_COS = 24;
}