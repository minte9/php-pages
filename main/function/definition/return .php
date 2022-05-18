<?php

/**
 * Return is not a function, it is a language construct.
 * Parantheses are not required and it is commmont ...
 * to leave them out
 */

function A() {
    return (1);
}
    
function B() {
    return 2; // also, it is faster
}
    
echo A(); // Output: 1
echo B(); // Output: 2