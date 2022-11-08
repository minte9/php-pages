<?php

/**
 * PHP has three variable scopes: 
 * global scope, function scope, class scope
 * 
 * A function accepts a variable numbers of arguments.
 * A coommon example is the printf() family of functions.
 */

function sumOfInts(int ...$ints)
{
    return array_sum($ints);
}

echo sumOfInts(1, 2, 3); // 6
echo sumOfInts(1, 2, 3, 4, 5); // 15

echo sprintf("%s %s is %d old", "John", "Smith", 10); 
    // John Smith is 10 old