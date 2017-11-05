<?php
/**
 * Created by PhpStorm.
 * User: caveman
 * Date: 11/5/17
 * Time: 9:41 PM
 */

namespace Gobgp\Bgp;


use Gobgp\Enum;

class ExtendedCommunity extends Enum
{
	//Flowspec action extended communities
	const TRAFFIC_RATELIMIT = 0x8006;
	const TRAFFIC_ACTION    = 0x8007;
	const REDIRECT          = 0x8008;
	const TRAFFIC_MARK      = 0x8009;
}