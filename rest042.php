<?php 

$baseUrl = 'https://financialmodelingprep.com/api/v3/profile/';
$finalUrl = $baseUrl . $argv[1];

require_once 'vendor/autoload.php';

use GuzzleHttp\Client;


$client = new Client(
	[
		'base_uri' => 'https://financialmodelingprep.com/api/v3/quote/',
		'timeout' => 2.0,
	]
);
try {

	$response = $client->get($argv[1]);
	echo $response->getBody();

} catch(\GuzzleHttp\Exception\ClientException $e) {
	echo $e->getMessage();	
}


