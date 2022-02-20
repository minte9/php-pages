<?php
/**
 * Array to Object type casting
 */

$arr = array('senderId' => 10);

$obj = (object) $arr;

echo $obj->senderId; // 10
