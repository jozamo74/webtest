<?php 

$baseUrl = 'https://financialmodelingprep.com/api/v3/profile/';
$finalUrl = $baseUrl . $argv[1];

if ($data = file_get_contents($finalUrl)) {

	$result = json_decode($data, true);
	echo $result[0]['mktCap'];
} else {

	var_dump($http_response_header);
}



