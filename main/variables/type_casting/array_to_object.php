<?php

/**
 * Array to Object type casting
 */

$A = array('senderId' => 10);
$B = (object) $A;

echo $B->senderId; // 10