<?php
/**
 * Created by PhpStorm.
 * User: caveman
 * Date: 11/5/17
 * Time: 8:55 PM
 */

namespace Gobgp\Flowspec;


use Gobgp\Enum;

class FlowspecMatchFragmentType extends Enum
{
	const notAFragment      = 0x00;
	const dontFragment      = 0x01;
	const isFragment        = 0x02;
	const isFirstFragment   = 0x04;
	const isLastFragment    = 0x08;
}