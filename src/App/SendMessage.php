<?php

declare(strict_types=1);

namespace Polidog\PhpCsvMailSender\App;

use Polidog\PhpCsvMailSender\Feature\CsvMailSender\UseCase\AbstractSendMessage;

final class SendMessage extends AbstractSendMessage
{
    public function loadCsv(string $path): iterable
    {
        // TODO: Implement loadCsv() method.
    }

    public function sendEmail(string $to, string $from, string $subject, string $body): void
    {
        // TODO: Implement sendEmail() method.
    }

    public function saveReport(int $id, \DateTimeImmutable $time): void
    {
        // TODO: Implement saveReport() method.
    }
}
