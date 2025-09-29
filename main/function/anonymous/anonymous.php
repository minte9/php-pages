<?php
/**
 * An anonymous function is a function without a name.
 * There are also called closures or lamba functions.
 * Be aware of the ; after function declaration.
 */

$greet = function($name) {
    return "Hello, $name!";
};

echo $greet('Alice');  // Hello, Alice!
