<?php

declare(strict_types=1);

namespace Shirokovnv\OtusDemoExample\SOLID\Principle2;

class SmtpMailer
{
    private Logger $logger;

    public function __construct()
    {
        $this->logger = new Logger();
    }

    public function sendMessage(string $message): void
    {
        // send actual message

        $this->logger->log("Log that message sent");
    }
}
