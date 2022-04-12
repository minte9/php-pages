<?php

/**
 * Arrow functions, also called "short closures", 
 * allow for less verbose one-liner functions.
 */

$posts = [
    (object) ['id' => 1, 'name' => 'John'],
    (object) ['id' => 2, 'name' => 'Mark'],
];

// PHP 7.4+
$ids = array_map(fn($post) => $post->id, $posts);
print_r($ids); // [1, 2]

// PHP < 7.4 
$ids = array_map(function ($post) {
    return $post->id;
}, $posts);
print_r($ids); // [1, 2]