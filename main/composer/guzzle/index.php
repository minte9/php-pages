<?php

/** 
 * Guzzle is a HTTP client library for PHP, 
 * initially a wrapper library around cURL.
 * It evolved to a transport agnostic PSR-7 compatible library.

 * composer require guzzlehttp/guzzle
 */

require __DIR__ . '/vendor/autoload.php';

$client = new GuzzleHttp\Client();
$response = $client->request('GET', 'http://httpbin.org/get');
$json = json_decode($response->getBody());

echo $json->origin; // 188.27.97.4