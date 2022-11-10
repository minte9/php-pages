<?php

/**
 * Extract assign multiple variables ...
 * from key/value array
 */

$array = array('a'=>1, 'b'=>2, 'c'=>3);
extract($array);

echo $b; // 2