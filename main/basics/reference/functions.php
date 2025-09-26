<?php
/**
 * By default, function arguments in PHP are passed by value (copied).
 * If you want a function to modify the value, you pass it by reference.
 * 
 * This is recommended only for large datasets.
 * In pure functional programming, passing by reference is not recommended.
 */

function addUser(&$users, $user): void
{
    $users[] = $user;
}

$team = ["Alice", "Bob"];
addUser($team, "John");
addUser($team, "Mary");

print_r($team);  // Alice, Bob, John, Mary