<?php
/**
 * composer require rmccue/requests
 */

require_once __DIR__ . '/vendor/autoload.php';

use WpOrg\Requests\Requests;

$url = 'http://httpbin.org/get';
$headers = ['Accept' => 'Application/json'];
$options = ['auth' => ['user', 'pass']];
$request = Requests::get($url, $headers, $options);

echo $request->status_code; // 200
echo $request->headers['content-type']; 
    // application/json; charset=utf-8

$body = json_decode($request->body);

echo $body->origin; // 188.26.232.235
echo $body->headers->Host; // httpbin.org