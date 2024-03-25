<?php

declare(strict_types=1);

namespace Polidog\PhpCsvMailSender\App;

use Polidog\PhpCsvMailSender\Feature\CsvMailSender\Data\CsvData;
use Polidog\PhpCsvMailSender\Feature\CsvMailSender\UseCase\AbstractSendMessage;
use Polidog\PhpCsvMailSender\Library\CsvLoader\CsvLoader;
use Polidog\PhpCsvMailSender\Library\Mailer\Mailer;

final class SendMessageProvider extends AbstractSendMessage
{
    public function __construct(
        private readonly CsvLoader $csvLoader,
        private readonly Mailer $mailer
    ) {
    }

    public function loadCsv(string $path): iterable
    {
        foreach ($this->csvLoader->loadCsv($path) as $data) {
            yield new CsvData((int) $data['id'], $data['name'], $data['email']);
        }
    }

    public function sendEmail(string $to, string $from, string $subject, string $body): void
    {
        $this->mailer->send($to, $from, $subject, $body);
    }

    public function saveReport(int $id, \DateTimeImmutable $time): void
    {
        // TODO: Implement saveReport() method.
    }
}
