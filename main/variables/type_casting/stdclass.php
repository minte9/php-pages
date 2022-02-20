<?php
/**
 * stdClass is the default PHP object.
 * stdClass has no properties, methods or parent.
 *
 * It does not support magic methods.
 * It implements no interfaces.
 * 
 * When you cast a scalar or array as Object, ...
 * you get an instance of stdClass.
 */

$obj = (object) array(); // OR
$obj = new stdClass();

$obj->key1 = "value1";
$obj->key2 = "value2";

var_dump($obj);

/*
object(stdClass)[1]
      public 'key1' => string 'value1' (length=6)
      public 'key2' => string 'value2' (length=6)
*/
