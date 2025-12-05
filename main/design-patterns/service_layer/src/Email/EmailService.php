<?php

namespace App\Email;

class EmailService
{
    public function send(GenericEmail $genericEmail): void
    {
        // Build email
        $email = $genericEmail->build();
        
        // Simulate sending
        echo "\n EMAIL SENT / Subject: {$email->subject} ";
        foreach ($email->attachments as $path) {
            echo " / $path";
        }

        /*
            EMAIL SENT / Subject: Welcome  / welcome_guide.pdf
            EMAIL SENT / Subject: Reset Password  / instructions.txt
        */
    }
}