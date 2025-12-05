<?php

namespace App\Email; 

class GenericEmail
{
    public function __construct(
        public string $to, 
        public string $subject, 
        public string $body, 
        public array $attachments
    ) {}

    public function build(): object
    {
        // Simulate mail object
        $mail = [
            "to" => $this->to,
            "subject" => $this->subject, 
            "body" => $this->body,
            "attachments" => [],
        ];

        foreach($this->attachments as $path) {
            $this->attach($path);
        }

        return (object) $mail;
    }

    public function attach(string $filePath): self
    {
        $this->attachments[] = $filePath;
        return $this;
    }
}