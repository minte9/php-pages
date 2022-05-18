<?php

// Function names are case-insensitive
// Fatal error: Cannot redeclare Name()

function name() {
    echo "1";
}

if (! function_exists('name')) {
    function Name() {
        echo "2";
    }
}

Name(); // "1"