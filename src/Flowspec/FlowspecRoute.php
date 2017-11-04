<?php
/**
 * Created by PhpStorm.
 * User: caveman
 * Date: 11/2/17
 * Time: 10:05 PM
 */

namespace Gobgp\Flowspec;

use Gobgp\Bgp\AFI;
use Gobgp\Bgp\RouteFamily;
use Gobgp\Bgp\SAFI;
use Leth\IPAddress\IPv6\Address;


class FlowspecRoute
{
	private $matches = [];

	private $action;

	private $routeFamily;

	public function __construct(RouteFamily $rf)
	{
		$this->setRouteFamily($rf);
	}

	public function getMatchs()
	{
		return $this->matches;
	}

	public function addMatch(FlowspecMatch $match)
	{
		$this->matches[$match->getType()->getVal()] = $match;
	}

	public function removeMatch($index)
	{
		if (isset($this->matches[$index])) {
			unset($this->matches[$index]);
		}
	}

	/**
	 * @return mixed
	 */
	public function getAction()
	{
		return $this->action;
	}

	/**
	 * @param mixed $action
	 */
	public function setAction($action)
	{
		$this->action = $action;
	}

	/**
	 * @return mixed
	 */
	public function getRouteFamily(): RouteFamily
	{
		return $this->routeFamily;
	}

	/**
	 * @param RouteFamily $routeFamily
	 */
	public function setRouteFamily(RouteFamily $routeFamily)
	{
		if (in_array($routeFamily->getVal(), [
			RouteFamily::FLOWSPEC_IPv4_UNICAST,
			RouteFamily::FLOWSPEC_IPv4_VPN,
			RouteFamily::FLOWSPEC_IPv6_UNICAST,
			RouteFamily::FLOWSPEC_IPv6_VPN,
			RouteFamily::FLOWSPEC_L2_VPN
		])) {
			$this->routeFamily = $routeFamily;
		} else {
			throw new \Exception("Invalid route family, must be a FlowSpec route family");
		}
	}

	public function toBytes()
	{

	}

	public static function fromBytes(RouteFamily $rf, $nlri, $attributes): FlowspecRoute
	{
		$route = new FlowspecRoute($rf);

		$data = [];
		foreach (str_split($nlri) as $byte) {
			$data[] = ord($byte);
		}

		dump($data);

		if ($data[0] >> 4 == 0xf && count($data) > 2) {
			$length = $data[0] << 8 | $data[1];
			$data = array_slice($data, 2);
		} elseif (count($data) > 1) {
			$length = $data[0];
			$data = array_slice($data, 1);
		} else {
			throw new \Exception("Missing byte's can't parse match");
		}

		for ($i = $length; $i > 0;) {
			if (count($data) == 0) {
				throw new \Exception("Missing byte's can't parse match");
			}

			$c = null;

			switch ($data[0]) {
				case FlowspecMatchType::DST_PREFIX:
					switch ($rf->getVal() >> 16) {
						case AFI::IP:
							$c = FlowspecMatchIPv4::fromBytes($data);
							break 2;
						case AFI::IP6:
							$c = FlowspecMatchIPv6::fromBytes($data);
					}
					break;

				case FlowspecMatchType::SRC_PREFIX:
					switch ($rf->getVal() >> 16) {
						case AFI::IP:
							$c = FlowspecMatchIPv4::fromBytes($data);
							break;
						case AFI::IP6:
							$c = FlowspecMatchIPv6::fromBytes($data);
					}
					break;
				case FlowspecMatchType::IP_PROTO:
				case FlowspecMatchType::PORT:
				case FlowspecMatchType::DST_PORT:
				case FlowspecMatchType::SRC_PORT:
				case FlowspecMatchType::ICMP_TYPE:
				case FlowspecMatchType::ICMP_CODE:
				case FlowspecMatchType::PKT_LEN:
					$c = FlowspecMatchNumeric::fromBytes($data);
					break;
				case FlowspecMatchType::TCP_FLAG:
					//TODO add flowspec match for tcp flags
					break;
				case FlowspecMatchType::DSCP:
					//TODO add flowspec match for DSCP
					break;
				case FlowspecMatchType::FRAGMENT:
					//TODO add flowspec match for fragement
					break;

				case FlowspecMatchType::LABEL:
					if ($rf->getVal() >> 16 == AFI::IP6) {
						//TODO add flowspec match for IPv6 Flow label
					} else {
						throw new \Exception("IPv6 Flow label is only available for IPv6 Route family table");
					}
					break;
				case FlowspecMatchType::ETHERNET_TYPE:
				case FlowspecMatchType::LLC_DSAP:
				case FlowspecMatchType::LLC_SSAP:
				case FlowspecMatchType::LLC_CONTROL:
				case FlowspecMatchType::SNAP:
				case FlowspecMatchType::VID:
				case FlowspecMatchType::COS:
				case FlowspecMatchType::INNER_VID:
				case FlowspecMatchType::INNER_COS:
					//TODO figure out which match types these need
					break;
				default:
					//TODO $c = UnknownMatch
			}

			dump($c->toBytes());

			$route->addMatch($c);
			$data = array_slice($data, $c->byteCount());
			$i -= $c->byteCount();
		}

		return $route;
	}
}