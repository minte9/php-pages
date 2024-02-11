<?php
/*
    app/03.php - Fix XSS

    http://localhost:8000/02.php?name=<script>alert('Hack!');</script>
        XSS attempt - working
    http://localhost:8000/03.php?name=<script>alert('Hack!');</script>
        XSS attempt - fixed
*/

ini_set("display_errors", 1);
header('Content-Type: text/html; charset=utf-8');

$name = $_GET['name'] ?? "World";
printf("Hello %s", htmlspecialchars($name, ENT_QUOTES, 'UTF-8'));