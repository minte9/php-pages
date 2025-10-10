<?php
/**
 * Bitwise example to manage user permissions.
 * Each permission uses a unique bit so we can easily combine them.
 */

// Define bitwise constants
define('READ', 1);    // 001 in binary
define('WRITE', 2);   // 010 in binary
define('EXECUTE', 4); // 100 in binary

// Retrive user permissions
$userPermissions = READ | WRITE;  // 001 | 010 = 001 (decimal 3)

// Check permissions
if ($userPermissions & READ) {
    echo "User can READ\n";
}
if ($userPermissions & WRITE) {
    echo "User can WRITE\n";
}
if ($userPermissions & ~EXECUTE) {
    echo "User cannot EXECUTE\n";
}

/**
 * User can READ
 * User can WRITE
 * User cannot EXECUTE
 */