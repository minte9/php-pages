<?php
/**
 * Fix XSS - index3.php
 * 
 * php -S localhost:8000
 * 
 * http://localhost:8000/index2.php?name=<script>alert('Hack!');</script>
 *      XSS vulernambility
 * 
 * http://localhost:8000/index3.php?name=<script>alert('Hack!');</script>
 *      Hello <script>alert('Hack!');</script>
 */

ini_set("display_errors", 1);

$name = $_GET['name'] ?? "World";
header('Content-Type: text/html; charset=utf-8');
printf("Hello %s", htmlspecialchars($name, ENT_QUOTES, 'UTF-8'));