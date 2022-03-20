<?php

/**
 * Guzzle is an abstraction layer for http request.
 * It uses cURL by default you can use any other http client that you want.
 * 
 * Send an asynchronous request:
 */

require __DIR__ . '/vendor/autoload.php';

use GuzzleHttp\Client;
use GuzzleHttp\Psr7\Request;

$client = new Client();
$request = new Request('GET', 'https://api.github.com/repos/guzzle/guzzle');

$promise = $client->sendAsync($request)->then(
    function ($response) {
        echo 'I completed! ' . $response->getBody();
    }
);
$promise->wait();