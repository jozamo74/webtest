<?php 

$baseUrl = 'https://financialmodelingprep.com/api/v3/profile/';
$finalUrl = $baseUrl . $argv[1];

if ($data = file_get_contents($finalUrl)) {
	//var_dump($data);
	$result = json_decode($data, true);
	echo $result[0]['mktCap'] . "\r\n";
} else {

	var_dump($http_response_header);
}



