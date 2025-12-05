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
        $service->send(new GenericEmail(
            "john@example.com",
            "Welcome",
            "Hello John, welcome!",
            ["welcome_guide.pdf"]
        ));

        // Password reset email
        $service->send(new GenericEmail(
            "john@example.com",
            "Reset Password",
            "Click this to reset password.",
            ["instructions.txt"]
        ));
    }
}