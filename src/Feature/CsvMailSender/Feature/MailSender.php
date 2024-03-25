<?php

declare(strict_types=1);

namespace Polidog\PhpCsvMailSender\Feature\CsvMailSender\Feature;

interface MailSender
{
    public function sendEmail(string $to, string $from, string $subject, string $body): void;
}
