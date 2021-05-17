<?php 
$finalUrl = 'https://xkcd.com/' . $argv[1] . '/info.0.json';

$ch = curl_init($finalUrl);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

$ret = curl_exec($ch);

$data = json_decode($ret, true);

if (!curl_errno($ch)) {
	$http_code = curl_getinfo($ch, CURLINFO_HTTP_CODE);
	if ($http_code === 200) {
		echo $data['day'] . '/' . $data['month'] . '/'. $data['year']; 
	} else {
		echo "Error $http_code";
	}
} else {
	echo 'Error: ' . curl_error($ch);
}
curl_close($ch);




