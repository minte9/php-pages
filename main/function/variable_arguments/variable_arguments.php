<?php

/**
 * PHP has three variable scopes: 
 * global scope, function scope, class scope
 * 
 * A function accepts a variable numbers of arguments
 */

function sumOfInts(int ...$ints)
{
    return array_sum($ints);
}

echo sumOfInts(1, 2, 3); // 6