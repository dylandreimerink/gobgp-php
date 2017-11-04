<?php
/**
 * Created by PhpStorm.
 * User: caveman
 * Date: 11/2/17
 * Time: 12:26 AM
 */

namespace Gobgp\Table;


use Gobgp\Enum;

class Resource extends Enum
{
	const GLOBAL = 0;
	const LOCAL = 1;
	const ADJ_IN = 2;
	const ADJ_OUT = 3;
	const VRF = 4;
}