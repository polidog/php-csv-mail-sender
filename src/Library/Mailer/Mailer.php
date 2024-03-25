<?php

declare(strict_types=1);

namespace Polidog\PhpCsvMailSender\Library\Mailer;

interface Mailer
{
    public function send(string $to, string $from, string $subject, string $body): void;
}
