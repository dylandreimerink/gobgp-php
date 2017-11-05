<?php
/**
 * Created by PhpStorm.
 * User: caveman
 * Date: 11/5/17
 * Time: 8:54 PM
 */

namespace Gobgp\Flowspec;


class FlowspecMatchFragmentPart extends FlowspecMatchNumericPart
{
	public function setValue($value)
	{
		//Will throw an exception if the value is not a valid Fragment part type
		FlowspecMatchFragmentType::get($value);

		return parent::setValue($value);
	}
}