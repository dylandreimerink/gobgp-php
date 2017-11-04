# GoBGP-PHP
A PHP wrapper for the GoBGP gRPC client

## Requirements
* PHP 7
* The gRPC PHP extension: https://pecl.php.net/package/gRPC 

## Installation
TODO: make installation instruction for composer

## Goals
This project was made for 2 main reasons:
1. If you wanted to use the GoBGP API you would have to manually generate 
the gRPC client code for PHP, which is a pain.
2. Once you have the GoBGP API it is hard to get started because most data that is sent
from and to the GoBGP API is encoded and is not well documented.

The goal of this project is to solve both of these issue's. Even tho I might decide to 
move the pregenerated client code to a separate repo and package.

As of this moment only a small part of the GoBGP API is wrapped, but I hope to get full 
coverage as soon as passable. After that is done the whole code base should receive unit 
tests.

Help and contributions are always welcome

## Guide for contributes
### Generating GoBGP gRPC API client code
The client code is generated from the [.proto file](https://github.com/osrg/gobgp/blob/master/api/gobgp.proto) at /api/gobgp.proto
This file is in the [protocol buffers](https://developers.google.com/protocol-buffers/) format, gRPC uses protocol buffers as format for sending the API calls.
Therefor we need to install protoc(The protocol buffers compiler) and compile the gRPC php plugin for protoc

Step by step:
1. Follow the normal installation instructions first
2. Install protoc by following the [installation instructions](https://github.com/google/protobuf/tree/master/src/README.md) for your system 
3. Install the gRPC PHP protoc plugin by following the [instructions](https://grpc.io/docs/quickstart/php.html#install-protobuf-plugin)
4. Get the latest .proto file from GoBGP, [generate](https://grpc.io/docs/quickstart/php.html#generate-grpc-code) the latest client code and replace the
code in /lib with the newly generated client code

The current version of the client code was generated from the .proto file in commit [#3678607](https://github.com/osrg/gobgp/commit/36786073c1301b3ee63ff27ea7733613fd31626c)

### Docs and references
Most of the work is in decoding and encoding to the correct formats. Most of the formats
are from accepted BGP RFC's or draft's. Up until now I used the following docs to find what I need:
* Base BGP FlowSpec RFC - https://tools.ietf.org/html/rfc5575 
* IPv6 extension of RFC5575 - https://www.ietf.org/archive/id/draft-ietf-idr-flow-spec-v6-08.txt
* L2VPN extension of RFC5575 - https://tools.ietf.org/html/draft-ietf-idr-flowspec-l2vpn-07
* BGP-4 RFC - https://tools.ietf.org/html/rfc4760
* List of BGP attributes - http://www.networkers-online.com/blog/2012/05/bgp-attributes/

Sometimes GoBGP can differ a bit from the latest draft's, in those cases you have to 
reverse engineer the format or look at the source code.

## TODO's
* Wrap all API calls
* Write unit tests for all encoding and decoding functions
* Add rule builders to further simplify the usage of the library
* Make a easy method of querying and filtering routes 

## Idea's / use cases
* Use 2 GoBGP servers with a php-gobgp instance in the middle so more advanced input
filtering can be done than is currently possible in BGP itself
* Make route synchronization between multiple route servers so the sake of redundancy
* Make a version of this library for symfony and laravel
* Making a auto backup system using the MRT dumps and injection functionality of GoBGP
* Making custom monitoring for changes in BGP announcements