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

    public function attach(string $filePath): self
    {
        $this->attachments[] = $filePath;
        return $this;
    }

    public function build(): array
    {
        return [
            "to" => $this->to,
            "subject" => $this->subject,
            "body" => $this->body,
            "attachments" => $this->attachments,
        ];
    }
}