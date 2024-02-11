<?php

require_once __DIR__ . '/vendor/autoload.php';

use WpOrg\Requests\Requests;

$url = 'http://httpbin.org/get';
$headers = ['Accept' => 'Application/json'];
$options = ['auth' => ['user', 'pass']];

// Request
$request = Requests::get($url, $headers, $options);
$body = json_decode($request->body);

// Output
echo "Status code: {$request->status_code} \r\n";
echo "Contend type: {$request->headers['content-type']} \r\n"; 
echo "Origin: {$body->origin} \r\n";
echo "Host: {$body->headers->Host}";

/*
    Status code: 200 
    Contend type: application/json 
    Origin: 188.25.141.235 
    Host: httpbin.org
*/