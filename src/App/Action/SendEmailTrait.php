<?php

namespace Polidog\PhpCsvMailSender\App\Action;

use Polidog\PhpCsvMailSender\Library\Mailer\Mailer;

trait SendEmailTrait
{
    private readonly Mailer $mailer;

    private function sendEmail(string $to, string $from, string $subject, string $body): void
    {
        $this->mailer->send($to, $from, $subject, $body);
    }
}