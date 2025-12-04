<?php

namespace App\Email;

class EmailService
{
    public function send(GenericEmail $genericEmail): void
    {
        $email = $genericEmail->build();

        echo "----- EMAIL SENT ----- \n";

        echo "To: {$email['to']} \n";
        echo "Subject: {$email['subject']} \n";
        echo "Body:{$email['body']} \n";

        if (!empty($email['attachments'])) {
            echo "Attachments: \n";
            foreach ($email['attachments'] as $file) {
                echo "- $file \n";
            }
        }
        echo "\n";
    }
}