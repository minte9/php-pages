<?php

/**
 * Identical operator
 */

$domain = 'xn--google.com';
$domain2 = 'google.com';

var_dump(stripos($domain, 'xn--') === 0); // true - Correct
var_dump(stripos($domain2, 'xn--') == 0); // true - Incorrect