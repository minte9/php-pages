<?php

/**
 * Send an asynchronous request:
 */

require __DIR__ . '/vendor/autoload.php';

use GuzzleHttp\Client;
use GuzzleHttp\Psr7\Request;

$client = new Client();
$request = new Request('GET', 'https://api.github.com/repos/guzzle/guzzle');

$promise = $client->sendAsync($request)->then(
    function ($response) {
        echo 'Response is completed! ';
        echo 'Response: ' . json_decode($response->getBody())->{'full_name'};
    }
);
$promise->wait();

// Response is completed! 
// Response: guzzle/guzzle