<?php

/**
 * Class constants are allocated once per class, ...
 * and not for each class instance.
 */
class MyClass {

    const A = 1;
    private const B = 2;
 
    public function  __construct() {}
}

echo MyClass::A; // 1