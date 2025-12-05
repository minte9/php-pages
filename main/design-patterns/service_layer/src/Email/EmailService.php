<?php

namespace App\Email;

class EmailService
{
    public function send(GenericEmail $genericEmail): void
    {
        $email = $genericEmail->build();

        echo "EMAIL SENT / Subject: {$email->subject} \n";
    }
}