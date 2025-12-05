<?php

namespace App\Email;

class EmailService
{
    public function send(GenericEmail $genericEmail): void
    {
        $email = $genericEmail->build();
        
        echo "\n EMAIL SENT / Subject: {$email->subject} ";

        foreach ($email->attachments as $path) {
            echo " / $path";
        }
    }
}