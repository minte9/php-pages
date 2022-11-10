<?php
/**
 * Create an array containing a range of elements ...
 * then split into chunks
 */

$data = range(1,100);
$chunks = array_chunk($data, 2);

foreach($chunks as $v) {
    echo " $v[0], $v[1] \n";
}

# 1, 2
# 3, 4
# 5, 6
# ...
# 99, 100