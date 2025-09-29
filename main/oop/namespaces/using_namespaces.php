<?php
/**
 * We can use a fully qualified name (with a leading backslash \) or 
 * import them with keyword 'use'.
 */

require 'vendor/Google/Logger.php';
require 'vendor/Yahoo/Logger.php';

$google = new \Google\Logger();
$google->log("Hello World!");  // Google Logger: Hello World!

$yahoo = new \Yahoo\Logger();
$yahoo->log("Hello World!");  // Google Logger: Hello World!