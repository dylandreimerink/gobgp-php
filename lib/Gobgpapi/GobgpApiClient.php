<?php
// GENERATED CODE -- DO NOT EDIT!

// Original file comments:
// Copyright (C) 2015-2017 Nippon Telegraph and Telephone Corporation.
//
// Permission is hereby granted, free of charge, to any person
// obtaining a copy of this software and associated documentation files
// (the "Software"), to deal in the Software without restriction,
// including without limitation the rights to use, copy, modify, merge,
// publish, distribute, sublicense, and/or sell copies of the Software,
// and to permit persons to whom the Software is furnished to do so,
// subject to the following conditions:
//
// The above copyright notice and this permission notice shall be
// included in all copies or substantial portions of the Software.
//
// THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND,
// EXPRESS OR IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF
// MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE AND
// NONINFRINGEMENT. IN NO EVENT SHALL THE AUTHORS OR COPYRIGHT HOLDERS BE
// LIABLE FOR ANY CLAIM, DAMAGES OR OTHER LIABILITY, WHETHER IN AN ACTION
// OF CONTRACT, TORT OR OTHERWISE, ARISING FROM, OUT OF OR IN CONNECTION
// WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE SOFTWARE.
//
namespace Gobgpapi;

/**
 * Interface exported by the server.
 *
 */
class GobgpApiClient extends \Grpc\BaseStub
{

	/**
	 * @param string $hostname hostname
	 * @param array $opts channel options
	 * @param \Grpc\Channel $channel (optional) re-use channel object
	 */
	public function __construct($hostname, $opts, $channel = null)
	{
		parent::__construct($hostname, $opts, $channel);
	}

	/**
	 * @param \Gobgpapi\StartServerRequest $argument input argument
	 * @param array $metadata metadata
	 * @param array $options call options
	 */
	public function StartServer(\Gobgpapi\StartServerRequest $argument,
	                            $metadata = [], $options = [])
	{
		return $this->_simpleRequest('/gobgpapi.GobgpApi/StartServer',
			$argument,
			['\Gobgpapi\StartServerResponse', 'decode'],
			$metadata, $options);
	}

	/**
	 * @param \Gobgpapi\StopServerRequest $argument input argument
	 * @param array $metadata metadata
	 * @param array $options call options
	 */
	public function StopServer(\Gobgpapi\StopServerRequest $argument,
	                           $metadata = [], $options = [])
	{
		return $this->_simpleRequest('/gobgpapi.GobgpApi/StopServer',
			$argument,
			['\Gobgpapi\StopServerResponse', 'decode'],
			$metadata, $options);
	}

	/**
	 * @param \Gobgpapi\GetServerRequest $argument input argument
	 * @param array $metadata metadata
	 * @param array $options call options
	 */
	public function GetServer(\Gobgpapi\GetServerRequest $argument,
	                          $metadata = [], $options = [])
	{
		return $this->_simpleRequest('/gobgpapi.GobgpApi/GetServer',
			$argument,
			['\Gobgpapi\GetServerResponse', 'decode'],
			$metadata, $options);
	}

	/**
	 * @param \Gobgpapi\AddNeighborRequest $argument input argument
	 * @param array $metadata metadata
	 * @param array $options call options
	 */
	public function AddNeighbor(\Gobgpapi\AddNeighborRequest $argument,
	                            $metadata = [], $options = [])
	{
		return $this->_simpleRequest('/gobgpapi.GobgpApi/AddNeighbor',
			$argument,
			['\Gobgpapi\AddNeighborResponse', 'decode'],
			$metadata, $options);
	}

	/**
	 * @param \Gobgpapi\DeleteNeighborRequest $argument input argument
	 * @param array $metadata metadata
	 * @param array $options call options
	 */
	public function DeleteNeighbor(\Gobgpapi\DeleteNeighborRequest $argument,
	                               $metadata = [], $options = [])
	{
		return $this->_simpleRequest('/gobgpapi.GobgpApi/DeleteNeighbor',
			$argument,
			['\Gobgpapi\DeleteNeighborResponse', 'decode'],
			$metadata, $options);
	}

	/**
	 * @param \Gobgpapi\GetNeighborRequest $argument input argument
	 * @param array $metadata metadata
	 * @param array $options call options
	 */
	public function GetNeighbor(\Gobgpapi\GetNeighborRequest $argument,
	                            $metadata = [], $options = [])
	{
		return $this->_simpleRequest('/gobgpapi.GobgpApi/GetNeighbor',
			$argument,
			['\Gobgpapi\GetNeighborResponse', 'decode'],
			$metadata, $options);
	}

	/**
	 * @param \Gobgpapi\ResetNeighborRequest $argument input argument
	 * @param array $metadata metadata
	 * @param array $options call options
	 */
	public function ResetNeighbor(\Gobgpapi\ResetNeighborRequest $argument,
	                              $metadata = [], $options = [])
	{
		return $this->_simpleRequest('/gobgpapi.GobgpApi/ResetNeighbor',
			$argument,
			['\Gobgpapi\ResetNeighborResponse', 'decode'],
			$metadata, $options);
	}

	/**
	 * @param \Gobgpapi\SoftResetNeighborRequest $argument input argument
	 * @param array $metadata metadata
	 * @param array $options call options
	 */
	public function SoftResetNeighbor(\Gobgpapi\SoftResetNeighborRequest $argument,
	                                  $metadata = [], $options = [])
	{
		return $this->_simpleRequest('/gobgpapi.GobgpApi/SoftResetNeighbor',
			$argument,
			['\Gobgpapi\SoftResetNeighborResponse', 'decode'],
			$metadata, $options);
	}

	/**
	 * @param \Gobgpapi\ShutdownNeighborRequest $argument input argument
	 * @param array $metadata metadata
	 * @param array $options call options
	 */
	public function ShutdownNeighbor(\Gobgpapi\ShutdownNeighborRequest $argument,
	                                 $metadata = [], $options = [])
	{
		return $this->_simpleRequest('/gobgpapi.GobgpApi/ShutdownNeighbor',
			$argument,
			['\Gobgpapi\ShutdownNeighborResponse', 'decode'],
			$metadata, $options);
	}

	/**
	 * @param \Gobgpapi\EnableNeighborRequest $argument input argument
	 * @param array $metadata metadata
	 * @param array $options call options
	 */
	public function EnableNeighbor(\Gobgpapi\EnableNeighborRequest $argument,
	                               $metadata = [], $options = [])
	{
		return $this->_simpleRequest('/gobgpapi.GobgpApi/EnableNeighbor',
			$argument,
			['\Gobgpapi\EnableNeighborResponse', 'decode'],
			$metadata, $options);
	}

	/**
	 * @param \Gobgpapi\DisableNeighborRequest $argument input argument
	 * @param array $metadata metadata
	 * @param array $options call options
	 */
	public function DisableNeighbor(\Gobgpapi\DisableNeighborRequest $argument,
	                                $metadata = [], $options = [])
	{
		return $this->_simpleRequest('/gobgpapi.GobgpApi/DisableNeighbor',
			$argument,
			['\Gobgpapi\DisableNeighborResponse', 'decode'],
			$metadata, $options);
	}

	/**
	 * @param \Gobgpapi\GetRibRequest $argument input argument
	 * @param array $metadata metadata
	 * @param array $options call options
	 */
	public function GetRib(\Gobgpapi\GetRibRequest $argument,
	                       $metadata = [], $options = [])
	{
		return $this->_simpleRequest('/gobgpapi.GobgpApi/GetRib',
			$argument,
			['\Gobgpapi\GetRibResponse', 'decode'],
			$metadata, $options);
	}

	/**
	 * @param \Gobgpapi\GetPathRequest $argument input argument
	 * @param array $metadata metadata
	 * @param array $options call options
	 */
	public function GetPath(\Gobgpapi\GetPathRequest $argument,
	                        $metadata = [], $options = [])
	{
		return $this->_serverStreamRequest('/gobgpapi.GobgpApi/GetPath',
			$argument,
			['\Gobgpapi\Path', 'decode'],
			$metadata, $options);
	}

	/**
	 * @param \Gobgpapi\ValidateRibRequest $argument input argument
	 * @param array $metadata metadata
	 * @param array $options call options
	 */
	public function ValidateRib(\Gobgpapi\ValidateRibRequest $argument,
	                            $metadata = [], $options = [])
	{
		return $this->_simpleRequest('/gobgpapi.GobgpApi/ValidateRib',
			$argument,
			['\Gobgpapi\ValidateRibResponse', 'decode'],
			$metadata, $options);
	}

	/**
	 * @param \Gobgpapi\AddPathRequest $argument input argument
	 * @param array $metadata metadata
	 * @param array $options call options
	 */
	public function AddPath(\Gobgpapi\AddPathRequest $argument,
	                        $metadata = [], $options = [])
	{
		return $this->_simpleRequest('/gobgpapi.GobgpApi/AddPath',
			$argument,
			['\Gobgpapi\AddPathResponse', 'decode'],
			$metadata, $options);
	}

	/**
	 * @param \Gobgpapi\DeletePathRequest $argument input argument
	 * @param array $metadata metadata
	 * @param array $options call options
	 */
	public function DeletePath(\Gobgpapi\DeletePathRequest $argument,
	                           $metadata = [], $options = [])
	{
		return $this->_simpleRequest('/gobgpapi.GobgpApi/DeletePath',
			$argument,
			['\Gobgpapi\DeletePathResponse', 'decode'],
			$metadata, $options);
	}

	/**
	 * @param \Gobgpapi\MonitorRibRequest $argument input argument
	 * @param array $metadata metadata
	 * @param array $options call options
	 */
	public function MonitorRib(\Gobgpapi\MonitorRibRequest $argument,
	                           $metadata = [], $options = [])
	{
		return $this->_serverStreamRequest('/gobgpapi.GobgpApi/MonitorRib',
			$argument,
			['\Gobgpapi\Destination', 'decode'],
			$metadata, $options);
	}

	/**
	 * @param \Gobgpapi\Arguments $argument input argument
	 * @param array $metadata metadata
	 * @param array $options call options
	 */
	public function MonitorPeerState(\Gobgpapi\Arguments $argument,
	                                 $metadata = [], $options = [])
	{
		return $this->_serverStreamRequest('/gobgpapi.GobgpApi/MonitorPeerState',
			$argument,
			['\Gobgpapi\Peer', 'decode'],
			$metadata, $options);
	}

	/**
	 * @param \Gobgpapi\EnableMrtRequest $argument input argument
	 * @param array $metadata metadata
	 * @param array $options call options
	 */
	public function EnableMrt(\Gobgpapi\EnableMrtRequest $argument,
	                          $metadata = [], $options = [])
	{
		return $this->_simpleRequest('/gobgpapi.GobgpApi/EnableMrt',
			$argument,
			['\Gobgpapi\EnableMrtResponse', 'decode'],
			$metadata, $options);
	}

	/**
	 * @param \Gobgpapi\DisableMrtRequest $argument input argument
	 * @param array $metadata metadata
	 * @param array $options call options
	 */
	public function DisableMrt(\Gobgpapi\DisableMrtRequest $argument,
	                           $metadata = [], $options = [])
	{
		return $this->_simpleRequest('/gobgpapi.GobgpApi/DisableMrt',
			$argument,
			['\Gobgpapi\DisableMrtResponse', 'decode'],
			$metadata, $options);
	}

	/**
	 * @param array $metadata metadata
	 * @param array $options call options
	 */
	public function InjectMrt($metadata = [], $options = [])
	{
		return $this->_clientStreamRequest('/gobgpapi.GobgpApi/InjectMrt',
			['\Gobgpapi\InjectMrtResponse', 'decode'],
			$metadata, $options);
	}

	/**
	 * @param \Gobgpapi\AddBmpRequest $argument input argument
	 * @param array $metadata metadata
	 * @param array $options call options
	 */
	public function AddBmp(\Gobgpapi\AddBmpRequest $argument,
	                       $metadata = [], $options = [])
	{
		return $this->_simpleRequest('/gobgpapi.GobgpApi/AddBmp',
			$argument,
			['\Gobgpapi\AddBmpResponse', 'decode'],
			$metadata, $options);
	}

	/**
	 * @param \Gobgpapi\DeleteBmpRequest $argument input argument
	 * @param array $metadata metadata
	 * @param array $options call options
	 */
	public function DeleteBmp(\Gobgpapi\DeleteBmpRequest $argument,
	                          $metadata = [], $options = [])
	{
		return $this->_simpleRequest('/gobgpapi.GobgpApi/DeleteBmp',
			$argument,
			['\Gobgpapi\DeleteBmpResponse', 'decode'],
			$metadata, $options);
	}

	/**
	 * @param \Gobgpapi\GetRpkiRequest $argument input argument
	 * @param array $metadata metadata
	 * @param array $options call options
	 */
	public function GetRpki(\Gobgpapi\GetRpkiRequest $argument,
	                        $metadata = [], $options = [])
	{
		return $this->_simpleRequest('/gobgpapi.GobgpApi/GetRpki',
			$argument,
			['\Gobgpapi\GetRpkiResponse', 'decode'],
			$metadata, $options);
	}

	/**
	 * @param \Gobgpapi\AddRpkiRequest $argument input argument
	 * @param array $metadata metadata
	 * @param array $options call options
	 */
	public function AddRpki(\Gobgpapi\AddRpkiRequest $argument,
	                        $metadata = [], $options = [])
	{
		return $this->_simpleRequest('/gobgpapi.GobgpApi/AddRpki',
			$argument,
			['\Gobgpapi\AddRpkiResponse', 'decode'],
			$metadata, $options);
	}

	/**
	 * @param \Gobgpapi\DeleteRpkiRequest $argument input argument
	 * @param array $metadata metadata
	 * @param array $options call options
	 */
	public function DeleteRpki(\Gobgpapi\DeleteRpkiRequest $argument,
	                           $metadata = [], $options = [])
	{
		return $this->_simpleRequest('/gobgpapi.GobgpApi/DeleteRpki',
			$argument,
			['\Gobgpapi\DeleteRpkiResponse', 'decode'],
			$metadata, $options);
	}

	/**
	 * @param \Gobgpapi\EnableRpkiRequest $argument input argument
	 * @param array $metadata metadata
	 * @param array $options call options
	 */
	public function EnableRpki(\Gobgpapi\EnableRpkiRequest $argument,
	                           $metadata = [], $options = [])
	{
		return $this->_simpleRequest('/gobgpapi.GobgpApi/EnableRpki',
			$argument,
			['\Gobgpapi\EnableRpkiResponse', 'decode'],
			$metadata, $options);
	}

	/**
	 * @param \Gobgpapi\DisableRpkiRequest $argument input argument
	 * @param array $metadata metadata
	 * @param array $options call options
	 */
	public function DisableRpki(\Gobgpapi\DisableRpkiRequest $argument,
	                            $metadata = [], $options = [])
	{
		return $this->_simpleRequest('/gobgpapi.GobgpApi/DisableRpki',
			$argument,
			['\Gobgpapi\DisableRpkiResponse', 'decode'],
			$metadata, $options);
	}

	/**
	 * @param \Gobgpapi\ResetRpkiRequest $argument input argument
	 * @param array $metadata metadata
	 * @param array $options call options
	 */
	public function ResetRpki(\Gobgpapi\ResetRpkiRequest $argument,
	                          $metadata = [], $options = [])
	{
		return $this->_simpleRequest('/gobgpapi.GobgpApi/ResetRpki',
			$argument,
			['\Gobgpapi\ResetRpkiResponse', 'decode'],
			$metadata, $options);
	}

	/**
	 * @param \Gobgpapi\SoftResetRpkiRequest $argument input argument
	 * @param array $metadata metadata
	 * @param array $options call options
	 */
	public function SoftResetRpki(\Gobgpapi\SoftResetRpkiRequest $argument,
	                              $metadata = [], $options = [])
	{
		return $this->_simpleRequest('/gobgpapi.GobgpApi/SoftResetRpki',
			$argument,
			['\Gobgpapi\SoftResetRpkiResponse', 'decode'],
			$metadata, $options);
	}

	/**
	 * @param \Gobgpapi\GetRoaRequest $argument input argument
	 * @param array $metadata metadata
	 * @param array $options call options
	 */
	public function GetRoa(\Gobgpapi\GetRoaRequest $argument,
	                       $metadata = [], $options = [])
	{
		return $this->_simpleRequest('/gobgpapi.GobgpApi/GetRoa',
			$argument,
			['\Gobgpapi\GetRoaResponse', 'decode'],
			$metadata, $options);
	}

	/**
	 * @param \Gobgpapi\EnableZebraRequest $argument input argument
	 * @param array $metadata metadata
	 * @param array $options call options
	 */
	public function EnableZebra(\Gobgpapi\EnableZebraRequest $argument,
	                            $metadata = [], $options = [])
	{
		return $this->_simpleRequest('/gobgpapi.GobgpApi/EnableZebra',
			$argument,
			['\Gobgpapi\EnableZebraResponse', 'decode'],
			$metadata, $options);
	}

	/**
	 * @param \Gobgpapi\AddVrfRequest $argument input argument
	 * @param array $metadata metadata
	 * @param array $options call options
	 */
	public function AddVrf(\Gobgpapi\AddVrfRequest $argument,
	                       $metadata = [], $options = [])
	{
		return $this->_simpleRequest('/gobgpapi.GobgpApi/AddVrf',
			$argument,
			['\Gobgpapi\AddVrfResponse', 'decode'],
			$metadata, $options);
	}

	/**
	 * @param \Gobgpapi\DeleteVrfRequest $argument input argument
	 * @param array $metadata metadata
	 * @param array $options call options
	 */
	public function DeleteVrf(\Gobgpapi\DeleteVrfRequest $argument,
	                          $metadata = [], $options = [])
	{
		return $this->_simpleRequest('/gobgpapi.GobgpApi/DeleteVrf',
			$argument,
			['\Gobgpapi\DeleteVrfResponse', 'decode'],
			$metadata, $options);
	}

	/**
	 * @param \Gobgpapi\GetVrfRequest $argument input argument
	 * @param array $metadata metadata
	 * @param array $options call options
	 */
	public function GetVrf(\Gobgpapi\GetVrfRequest $argument,
	                       $metadata = [], $options = [])
	{
		return $this->_simpleRequest('/gobgpapi.GobgpApi/GetVrf',
			$argument,
			['\Gobgpapi\GetVrfResponse', 'decode'],
			$metadata, $options);
	}

	/**
	 * @param \Gobgpapi\GetDefinedSetRequest $argument input argument
	 * @param array $metadata metadata
	 * @param array $options call options
	 */
	public function GetDefinedSet(\Gobgpapi\GetDefinedSetRequest $argument,
	                              $metadata = [], $options = [])
	{
		return $this->_simpleRequest('/gobgpapi.GobgpApi/GetDefinedSet',
			$argument,
			['\Gobgpapi\GetDefinedSetResponse', 'decode'],
			$metadata, $options);
	}

	/**
	 * @param \Gobgpapi\AddDefinedSetRequest $argument input argument
	 * @param array $metadata metadata
	 * @param array $options call options
	 */
	public function AddDefinedSet(\Gobgpapi\AddDefinedSetRequest $argument,
	                              $metadata = [], $options = [])
	{
		return $this->_simpleRequest('/gobgpapi.GobgpApi/AddDefinedSet',
			$argument,
			['\Gobgpapi\AddDefinedSetResponse', 'decode'],
			$metadata, $options);
	}

	/**
	 * @param \Gobgpapi\DeleteDefinedSetRequest $argument input argument
	 * @param array $metadata metadata
	 * @param array $options call options
	 */
	public function DeleteDefinedSet(\Gobgpapi\DeleteDefinedSetRequest $argument,
	                                 $metadata = [], $options = [])
	{
		return $this->_simpleRequest('/gobgpapi.GobgpApi/DeleteDefinedSet',
			$argument,
			['\Gobgpapi\DeleteDefinedSetResponse', 'decode'],
			$metadata, $options);
	}

	/**
	 * @param \Gobgpapi\ReplaceDefinedSetRequest $argument input argument
	 * @param array $metadata metadata
	 * @param array $options call options
	 */
	public function ReplaceDefinedSet(\Gobgpapi\ReplaceDefinedSetRequest $argument,
	                                  $metadata = [], $options = [])
	{
		return $this->_simpleRequest('/gobgpapi.GobgpApi/ReplaceDefinedSet',
			$argument,
			['\Gobgpapi\ReplaceDefinedSetResponse', 'decode'],
			$metadata, $options);
	}

	/**
	 * @param \Gobgpapi\GetStatementRequest $argument input argument
	 * @param array $metadata metadata
	 * @param array $options call options
	 */
	public function GetStatement(\Gobgpapi\GetStatementRequest $argument,
	                             $metadata = [], $options = [])
	{
		return $this->_simpleRequest('/gobgpapi.GobgpApi/GetStatement',
			$argument,
			['\Gobgpapi\GetStatementResponse', 'decode'],
			$metadata, $options);
	}

	/**
	 * @param \Gobgpapi\AddStatementRequest $argument input argument
	 * @param array $metadata metadata
	 * @param array $options call options
	 */
	public function AddStatement(\Gobgpapi\AddStatementRequest $argument,
	                             $metadata = [], $options = [])
	{
		return $this->_simpleRequest('/gobgpapi.GobgpApi/AddStatement',
			$argument,
			['\Gobgpapi\AddStatementResponse', 'decode'],
			$metadata, $options);
	}

	/**
	 * @param \Gobgpapi\DeleteStatementRequest $argument input argument
	 * @param array $metadata metadata
	 * @param array $options call options
	 */
	public function DeleteStatement(\Gobgpapi\DeleteStatementRequest $argument,
	                                $metadata = [], $options = [])
	{
		return $this->_simpleRequest('/gobgpapi.GobgpApi/DeleteStatement',
			$argument,
			['\Gobgpapi\DeleteStatementResponse', 'decode'],
			$metadata, $options);
	}

	/**
	 * @param \Gobgpapi\ReplaceStatementRequest $argument input argument
	 * @param array $metadata metadata
	 * @param array $options call options
	 */
	public function ReplaceStatement(\Gobgpapi\ReplaceStatementRequest $argument,
	                                 $metadata = [], $options = [])
	{
		return $this->_simpleRequest('/gobgpapi.GobgpApi/ReplaceStatement',
			$argument,
			['\Gobgpapi\ReplaceStatementResponse', 'decode'],
			$metadata, $options);
	}

	/**
	 * @param \Gobgpapi\GetPolicyRequest $argument input argument
	 * @param array $metadata metadata
	 * @param array $options call options
	 */
	public function GetPolicy(\Gobgpapi\GetPolicyRequest $argument,
	                          $metadata = [], $options = [])
	{
		return $this->_simpleRequest('/gobgpapi.GobgpApi/GetPolicy',
			$argument,
			['\Gobgpapi\GetPolicyResponse', 'decode'],
			$metadata, $options);
	}

	/**
	 * @param \Gobgpapi\AddPolicyRequest $argument input argument
	 * @param array $metadata metadata
	 * @param array $options call options
	 */
	public function AddPolicy(\Gobgpapi\AddPolicyRequest $argument,
	                          $metadata = [], $options = [])
	{
		return $this->_simpleRequest('/gobgpapi.GobgpApi/AddPolicy',
			$argument,
			['\Gobgpapi\AddPolicyResponse', 'decode'],
			$metadata, $options);
	}

	/**
	 * @param \Gobgpapi\DeletePolicyRequest $argument input argument
	 * @param array $metadata metadata
	 * @param array $options call options
	 */
	public function DeletePolicy(\Gobgpapi\DeletePolicyRequest $argument,
	                             $metadata = [], $options = [])
	{
		return $this->_simpleRequest('/gobgpapi.GobgpApi/DeletePolicy',
			$argument,
			['\Gobgpapi\DeletePolicyResponse', 'decode'],
			$metadata, $options);
	}

	/**
	 * @param \Gobgpapi\ReplacePolicyRequest $argument input argument
	 * @param array $metadata metadata
	 * @param array $options call options
	 */
	public function ReplacePolicy(\Gobgpapi\ReplacePolicyRequest $argument,
	                              $metadata = [], $options = [])
	{
		return $this->_simpleRequest('/gobgpapi.GobgpApi/ReplacePolicy',
			$argument,
			['\Gobgpapi\ReplacePolicyResponse', 'decode'],
			$metadata, $options);
	}

	/**
	 * @param \Gobgpapi\GetPolicyAssignmentRequest $argument input argument
	 * @param array $metadata metadata
	 * @param array $options call options
	 */
	public function GetPolicyAssignment(\Gobgpapi\GetPolicyAssignmentRequest $argument,
	                                    $metadata = [], $options = [])
	{
		return $this->_simpleRequest('/gobgpapi.GobgpApi/GetPolicyAssignment',
			$argument,
			['\Gobgpapi\GetPolicyAssignmentResponse', 'decode'],
			$metadata, $options);
	}

	/**
	 * @param \Gobgpapi\AddPolicyAssignmentRequest $argument input argument
	 * @param array $metadata metadata
	 * @param array $options call options
	 */
	public function AddPolicyAssignment(\Gobgpapi\AddPolicyAssignmentRequest $argument,
	                                    $metadata = [], $options = [])
	{
		return $this->_simpleRequest('/gobgpapi.GobgpApi/AddPolicyAssignment',
			$argument,
			['\Gobgpapi\AddPolicyAssignmentResponse', 'decode'],
			$metadata, $options);
	}

	/**
	 * @param \Gobgpapi\DeletePolicyAssignmentRequest $argument input argument
	 * @param array $metadata metadata
	 * @param array $options call options
	 */
	public function DeletePolicyAssignment(\Gobgpapi\DeletePolicyAssignmentRequest $argument,
	                                       $metadata = [], $options = [])
	{
		return $this->_simpleRequest('/gobgpapi.GobgpApi/DeletePolicyAssignment',
			$argument,
			['\Gobgpapi\DeletePolicyAssignmentResponse', 'decode'],
			$metadata, $options);
	}

	/**
	 * @param \Gobgpapi\ReplacePolicyAssignmentRequest $argument input argument
	 * @param array $metadata metadata
	 * @param array $options call options
	 */
	public function ReplacePolicyAssignment(\Gobgpapi\ReplacePolicyAssignmentRequest $argument,
	                                        $metadata = [], $options = [])
	{
		return $this->_simpleRequest('/gobgpapi.GobgpApi/ReplacePolicyAssignment',
			$argument,
			['\Gobgpapi\ReplacePolicyAssignmentResponse', 'decode'],
			$metadata, $options);
	}

	/**
	 * @param \Gobgpapi\GetRibInfoRequest $argument input argument
	 * @param array $metadata metadata
	 * @param array $options call options
	 */
	public function GetRibInfo(\Gobgpapi\GetRibInfoRequest $argument,
	                           $metadata = [], $options = [])
	{
		return $this->_simpleRequest('/gobgpapi.GobgpApi/GetRibInfo',
			$argument,
			['\Gobgpapi\GetRibInfoResponse', 'decode'],
			$metadata, $options);
	}

}
