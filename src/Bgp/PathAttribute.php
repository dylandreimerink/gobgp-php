<?php
/**
 * Created by PhpStorm.
 * User: caveman
 * Date: 11/5/17
 * Time: 9:12 PM
 */

namespace Gobgp\Bgp;


use Gobgp\Enum;

class PathAttribute extends Enum
{
	const ORIGIN                            = 1;
	const AS_PATH                           = 2;
	const NEXT_HOP                          = 3;
	const MULTI_EXIT_DISC                   = 4;
	const LOCAL_PREF                        = 5;
	const ATOMIC_AGGREGATE                  = 6;
	const AGGREGATOR                        = 7;
	const COMMUNITY                         = 8;
	const ORIGINATOR_ID                     = 9;
	const CLUSTER_LIST                      = 10;
	const DPA                               = 11;
	const ADVERTISER                        = 12;
	const CLUSTER_ID                        = 13;
	const MULTIPROTOCOL_REACHABLE_NLRI      = 14;
	const MULTIPROTOCOL_UNREACHABLE_NLRI    = 15;
	const EXTENDED_COMMUNITIES              = 16;
}