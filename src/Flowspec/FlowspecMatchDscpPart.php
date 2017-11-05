<?php
/**
 * Created by PhpStorm.
 * User: caveman
 * Date: 11/5/17
 * Time: 9:02 PM
 */

namespace Gobgp\Flowspec;


class FlowspecMatchDscpPart extends FlowspecMatchNumericPart
{
	public function setValue($value)
	{
		if($value < 1 || $value > 64){
			throw new \Exception("Value is not inside the valid DSCP range (1-64)");
		}
		return parent::setValue($value);
	}
}