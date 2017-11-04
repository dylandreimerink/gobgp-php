<?php
/**
 * Created by PhpStorm.
 * User: caveman
 * Date: 11/2/17
 * Time: 12:33 AM
 */

namespace Gobgp;


class ApiClient
{
	private $grpcApiClient;

	public function __construct($host = "localhost", $port = 50051)
	{
		$this->grpcApiClient = new \Gobgpapi\GobgpApiClient("$host:$port", [
			'credentials' => \Grpc\ChannelCredentials::createInsecure(),
		]);
	}

	public function getGrpcClient()
	{
		return $this->grpcApiClient;
	}
}