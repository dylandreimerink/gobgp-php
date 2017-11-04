<?php
/**
 * Created by PhpStorm.
 * User: caveman
 * Date: 11/1/17
 * Time: 10:44 PM
 */

require_once __DIR__ . "/../vendor/autoload.php";

use PHPUnit\Framework\TestCase;
use Grpc\ChannelCredentials as ChannelCredentials;

class FirstTest extends TestCase
{

	public function testConnection()
	{
		$goApi = new \Gobgpapi\GobgpApiClient("172.17.0.2:50051", [
			'credentials' => Grpc\ChannelCredentials::createInsecure(),
		]);
		$this->assertTrue($goApi->getConnectivityState() == \Grpc\STATUS_OK);
	}
}
