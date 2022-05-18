<?php

// Identical
$domain = 'xn--google.com';
echo (stripos($domain, 'xn--') === 0); // true
    // Correct

// Equal
$domain2 = 'google.com';
echo (stripos($domain2, 'xn--') == 0); // true
    // Incorrect