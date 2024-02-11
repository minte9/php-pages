<?php

require __DIR__ . '/vendor/autoload.php';

$client = new GuzzleHttp\Client();
$response = $client->request('GET', 'http://httpbin.org/get');
$json = json_decode($response->getBody());

echo $json->origin; // 188.27.97.4