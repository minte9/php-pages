<?php

namespace App;

use App\Email\EmailService;
use App\Email\GenericEmail;

class App
{
    public function run(): void 
    {
        $service = new EmailService();

        // Welcome email
        $welcome = new GenericEmail(
            "john@example.com",
            "Welcome",
            "Hello John, welcome!",
            ["welcome_guide.pdf"]
        );
        $service->send($welcome);

        // Password reset email
        $resetEmail = new GenericEmail(
            "john@example.com",
            "Reset Password",
            "Click this to reset password.",
            ["instructions.txt"]
        );
        $service->send($resetEmail);
    }
}