<?php
/**
 * In PHP objects are passed by value, just like scalars and arrays.
 * But the "value" of an object variable is a handle (an identifier).
 * This gives them reference-like behavior when modifying properties.
 * 
 */

class MyClass 
{
    public $value = 1;
}

function modify($obj): void
{
    $obj->value = 2;  // modifies the underlying object
}

$a = new MyClass();
modify($a);
echo $a->value;  // 2
