<?php
/**
 * Created by PhpStorm.
 * User: caveman
 * Date: 11/2/17
 * Time: 12:28 PM
 */

namespace Gobgp;

class GrpcException extends \Exception
{
}

trait ApiResponseChecker
{
	static protected function checkApiRespose(array $response)
	{
		if (count($response) != 2) {
			throw new \Exception("Expected 2 elements in response array");
		}

		list($message, $state) = $response;

		if ($state->code != 0) {
			throw new GrpcException($state->details, $state->code);
		}

		return $message;
	}
}