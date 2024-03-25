<?php

declare(strict_types=1);

namespace Polidog\PhpCsvMailSender\Library\Mailer;

use SendGrid;

final class SendGridMailer implements Mailer
{
    public function __construct(private readonly string $sendgridApiKey)
    {
    }

    public function send(string $to, string $from, string $subject, string $body): void
    {
        $sendgrid = new \SendGrid($this->sendgridApiKey);
        $email = new SendGrid\Mail\Mail();
        $email->setFrom($from);
        $email->setSubject($subject);
        $email->addTo($to);
        $email->addContent('text/plain', $body);
        $sendgrid->send($email);
    }
}
