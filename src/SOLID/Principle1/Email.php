<?php

declare(strict_types=1);

namespace Shirokovnv\OtusDemoExample\SOLID\Principle1;

class Email
{
    public function __construct(
        public string $from,
        public string $to,
        public string $subject,
        public string $message
    )
    {
    }

    public function send(): void
    {
        $headers =
            "From: " . $this->from . "\r\n" .
            "Reply-To:" . $this->to . "\r\n" .
            "X-Mailer: PHP/" . phpversion();

        mail($this->to, $this->subject, $this->message, $headers);
    }
}
