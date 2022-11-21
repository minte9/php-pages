<?php

/**
 * Return is not a function, it is a language construct
 * Parantheses are not required
 */

function A() {
    return (1);
}
    
function B() {
    return 2; // faster
}
    
echo A(); // 1
echo B(); // 2