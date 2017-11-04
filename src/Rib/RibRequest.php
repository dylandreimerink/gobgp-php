<?php
/**
 * Created by PhpStorm.
 * User: caveman
 * Date: 11/1/17
 * Time: 11:41 PM
 */

namespace Gobgp\Rib;


use Gobgp\ApiClient;
use Gobgp\ApiResponseChecker;
use Gobgp\Bgp\RouteFamily;
use Gobgp\Flowspec\FlowspecMatch;
use Gobgp\Flowspec\FlowspecRoute;
use Gobgp\Table\Resource;
use Gobgpapi\GetRibRequest;
use Gobgpapi\GetRibResponse;
use Gobgpapi\Table;

class RibRequest
{
	use ApiResponseChecker;

	static function getRib(ApiClient $client, RouteFamily $family, Resource $table_resource)
	{
		$getRibRequest = new GetRibRequest();

		$ribTable = new Table();
		$ribTable->setFamily($family->getVal());
		$ribTable->setType($table_resource->getVal());

		$getRibRequest->setTable($ribTable);

		$response = self::checkApiRespose($client->getGrpcClient()->GetRib($getRibRequest)->wait());

		return $response->getTable()->getDestinations();
	}

	static function getFlowspecRoutes(ApiClient $client, $routeFamily = RouteFamily::FLOWSPEC_IPv4_UNICAST)
	{
		$destinations = RibRequest::getRib($client, RouteFamily::get($routeFamily), Resource::get(Resource::GLOBAL));

		$paths = $destinations[0]->getPaths();

		$route = FlowspecRoute::fromBytes(RouteFamily::get($routeFamily), $paths[0]->getNlri(), $paths[0]->getPattrs());

		dump($route);
	}
}