<?php
/**
 * Created by PhpStorm.
 * User: caveman
 * Date: 11/3/17
 * Time: 9:29 PM
 */

namespace Gobgp\Flowspec;


interface FlowspecMatchPartInterface
{
	public function toBytes();

	public static function fromBytes(array $bytes);
}