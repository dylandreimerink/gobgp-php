<?php
/**
 * Created by PhpStorm.
 * User: caveman
 * Date: 11/1/17
 * Time: 11:05 PM
 */

require_once __DIR__ . "/../vendor/autoload.php";

use Gobgpapi\GobgpApiClient;

use Gobgp\ApiClient;
use Gobgp\Rib\RibRequest;
use Gobgp\Bgp\RouteFamily;
use Gobgp\Table\Resource;

class test
{
	public function __construct()
	{
		$client = new \Gobgp\ApiClient("172.17.0.2", 50051);
		RibRequest::getFlowspecRoutes($client, RouteFamily::FLOWSPEC_IPv6_UNICAST);
		//$entries = RibRequest::getRib($client, RouteFamily::get(RouteFamily::FLOWSPEC_IPv4_UNICAST), Resource::get(Resource::GLOBAL));
		//dump($entries);
	}
}

new test();