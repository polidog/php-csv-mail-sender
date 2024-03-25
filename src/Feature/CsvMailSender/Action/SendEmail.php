<?php

declare(strict_types=1);

namespace Polidog\PhpCsvMailSender\Feature\CsvMailSender\Action;

interface SendEmail
{
    public function sendEmail(string $to, string $from, string $subject, string $body): void;
}
