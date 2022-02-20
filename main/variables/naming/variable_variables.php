<?php

/**
 * It is possible to create variables whose names ...
 * do not follow the naming constraints.
 * 
 * Variable variables are a very powerful tool, ...
 * and should be used with extreme care.
 * 
 * Their improper use can lead to some significant security issues.
 */

$name = '123';
$$name = '456';

echo $$name; // 456
echo ${'123'}; // 456


/**
 * Security issues ...
 */

$debug = false;

$_POST = array('debug' => 1);
extract($_POST);

if ($debug) {
    echo "sql queries"; // debug is true!
}
