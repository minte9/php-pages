<?php
ini_set('display_errors', 1);

$map = [
    '/hello' => __DIR__ . '/../src/pages/hello.phtml',
    '/goodby' => __DIR__ . '/../src/pages/goodby.phtml',
];

// Manually fetching the requested path
$path = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

if (isset($map[$path])) {
    ob_start();
    
    include($map[$path]);
    $content = ob_get_clean(); // Capture the output of the included file
    
    // Setting the response content
    echo $content;
} else {
    // Handling a 404 not found
    header("HTTP/1.0 404 Not Found");
    echo "Page not found - Vanilla PHP";
}
