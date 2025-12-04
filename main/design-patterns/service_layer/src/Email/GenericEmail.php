<?php

namespace App\Email;

class GenericEmail
{
    public string $to;
    public string $subject;
    public string $body;
    public array $attachments;

    public function __construct(string $to, string $subject, string $body, array $attachments)
    {
        $this->to = $to;
        $this->subject = $subject;
        $this->body = $body;
        $this->attachments = $attachments;
    }

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