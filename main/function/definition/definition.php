<?php

/** 
 * Function names are case-insensitive
 * 
 * Having a function name() and adding a new one Name() ...
 * throws a Fatal error: Cannot redeclare Name()
 */

function name() {
    echo "1";
}

if (! function_exists('name')) {
    function Name() {
        echo "2";
    }
}

Name(); // "1"