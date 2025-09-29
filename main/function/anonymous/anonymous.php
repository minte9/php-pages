<?php
/**
 * An anonymous function is a function without a name.
 * There are also called closures or lamba functions.
 * 
 * It is often used as callback function, especially you don't need to reuse the function.
 * Be aware of the ; after function declaration.
 */

$greet = function($name) {
    return "Hello, $name!";
};

echo $greet('Alice');  // Hello, Alice!
