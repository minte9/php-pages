<?php
/**
 * By default, function arguments in PHP are passed by value (copied).
 * If you want a function to modify the value, you pass it by reference.
 */

function addUser(&$users, $user) {
    $users[] = $user;
}

$team = ["Alice", "Bob"];
addUser($team, "John");
addUser($team, "Mary");

print_r($team);  // Alice, Bob, John, Mary