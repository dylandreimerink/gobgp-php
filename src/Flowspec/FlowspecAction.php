<?php
/**
 * Created by PhpStorm.
 * User: caveman
 * Date: 11/5/17
 * Time: 10:10 PM
 */

namespace Gobgp\Flowspec;


use Gobgp\Bgp\ExtendedCommunity;

class FlowspecAction
{
	private $type;

	private $value;

	public function __construct(ExtendedCommunity $type, $value)
	{
		$this->setType($type);
		$this->setValue($value);
	}

	/**
	 * @return ExtendedCommunity
	 */
	public function getType() : ExtendedCommunity
	{
		return $this->type;
	}

	/**
	 * @param ExtendedCommunity $type
	 */
	public function setType(ExtendedCommunity $type)
	{
		if(!in_array($type->getVal(), [
			ExtendedCommunity::TRAFFIC_MARK,
			ExtendedCommunity::REDIRECT,
			ExtendedCommunity::TRAFFIC_ACTION,
			ExtendedCommunity::TRAFFIC_RATELIMIT
		])){
			throw new \Exception("Invalid type, must be a extended community of a flowspec type");
		}

		$this->type = $type;

		return $this;
	}

	/**
	 * @return mixed
	 */
	public function getValue()
	{
		return $this->value;
	}

	/**
	 * @param mixed $value
	 */
	public function setValue($value)
	{
		switch ($this->getType()->getVal()){
			case ExtendedCommunity::TRAFFIC_MARK:
				if(!is_numeric($value)){
					throw new \Exception("Value for traffic mark action must be a number");
				}

				$value = (int) $value;

				if($value < 1 || $value > 64){
					throw new \Exception("Value for traffic mark must be a valid DSCP number (1-64)");
				}
				break;
			case ExtendedCommunity::TRAFFIC_RATELIMIT:
				if(!is_float($value)){
					if(is_numeric($value)) {
						$value = (float) $value;
					}else{
						throw new \Exception("Value of traffic rate limit must be a float");
					}
				}
				break;
			case ExtendedCommunity::TRAFFIC_MARK:
				//TODO: check mark
				break;
			case ExtendedCommunity::REDIRECT:
				//TODO: check next-hop ip
				break;
		}

		$this->value = $value;
	}

	public function toBytes(){
		$bytes = [($this->getType()->getVal() & 0xff00) >> 8, $this->getType()->getVal() & 0x00ff, 0, 0, 0, 0, 0, 0];

		switch ($this->getType()->getVal()){
			case ExtendedCommunity::TRAFFIC_RATELIMIT:
				$i = 4;
				foreach(str_split(pack('G', $this->getValue())) as $char){
					$bytes[$i++] = ord($char);
				}
				break;
		}

		return $bytes;
	}

	public static function fromBytes($bytes){
		$type = $bytes[0] << 8 | $bytes[1];

		switch ($type){
			case ExtendedCommunity::TRAFFIC_RATELIMIT:
				//convert 4 byte's to IEEE 754 32bit float
				$value = unpack('G', chr($bytes[4]) . chr($bytes[5]) . chr($bytes[6]) . chr($bytes[7]))[1];
				break;
			default:
				throw new \Exception("Invalid extended community");
		}

		return new FlowspecAction(ExtendedCommunity::get($type), $value);
	}
}