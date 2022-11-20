<?php

/**
 * config.ini
 * 
 * url_base = "api.com/RestApi/v1/"
 * ssl_verifyhost = 2
 * ssl_verifypeer = true
 * auth_type = "token"
 * auth_method = "Authentication/RequestToken"
 */

$conf = parse_ini_file(__DIR__ . '/inc/config.ini');

var_dump($conf['ssl_verifyhost'] == 2);  // true
var_dump($conf['auth_type'] == 'token'); // true