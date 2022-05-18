<?php

// Identical - Correct
$domain = 'xn--google.com';
echo $finded = (stripos($domain, 'xn--') === 0); // true

// Equal - Incorrect
$domain2 = 'google.com';
echo $finded = (stripos($domain2, 'xn--') == 0); // true