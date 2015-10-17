<?php

/**
 * 
 */
return [

	/*
	|--------------------------------------------------------------------------
	| URI Parameter inputs
	|--------------------------------------------------------------------------
	|
	| When you call the proxify route, you need to specifiy the required 
	| parameters in order for the proxy server to function
	|
	*/

	'uri_parameters' => [
		'uri',
		'grant_type',
		'username',
		'password'
	],

	/*
	|--------------------------------------------------------------------------
	| Use header to provide Access Token
	|--------------------------------------------------------------------------
	|
	| Boolean true if you want the proxy server to provide access token in
	| header
	|
	*/

	'use_header' => false,

	/*
	|--------------------------------------------------------------------------
	| Array of Clients ID and Secret
	|--------------------------------------------------------------------------
	|
	| If you don't specify the client_id in the uri parameter, then the clients
	| stored in this array will be used
	|
	*/

	'client_tokens' => [
		'12345' => '12345'
	],
];