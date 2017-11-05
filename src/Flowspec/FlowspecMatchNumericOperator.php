<?php
/**
 * Created by PhpStorm.
 * User: caveman
 * Date: 11/3/17
 * Time: 9:34 PM
 */

namespace Gobgp\Flowspec;

use Gobgp\Enum;


//Based on https://tools.ietf.org/html/rfc5575 - chapter 4.  Dissemination of Information - Type 3 - IP Protocol
//And https://github.com/osrg/gobgp/blob/master/docs/sources/flowspec.md#decimal-values-and-operators
class FlowspecMatchNumericOperator extends Enum
{
	const true                  = 0x00; // bitmask 000
	const equalTo               = 0x01; // bitmask 001
	const greaterThen           = 0x02; // bitmask 010
	const greaterThenOrEqualTo  = 0x03; // bitmask 011
	const lessThen              = 0x04; // bitmask 100
	const lessThenOrEqualTo     = 0x05; // bitmask 101
	const notEqualTo            = 0x06; // bitmask 110
	const false                 = 0x07; // bitmask 111
}