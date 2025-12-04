<?php

require __DIR__ . '/vendor/autoload.php';

$app = new App\App();
$app->run();

/*
    ----- EMAIL SENT ----- 
    To: john@example.com 
    Subject: Welcome 
    Body:Hello John, welcome! 
    Attachments: 
    - welcome_guide.pdf 

    ----- EMAIL SENT ----- 
    To: john@example.com 
    Subject: Reset Password 
    Body:Click this to reset password. 
    Attachments: 
    - instructions.txt 
*/