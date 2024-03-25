<?php

declare(strict_types=1);

namespace Polidog\PhpCsvMailSender\Feature\CsvMailSender\Data;

use Polidog\PhpCsvMailSender\Feature\CsvMailSender\Feature\MailSender;

readonly class Message
{
    public function __construct(
        private CsvData $csvData,
        private string $from,
        private string $subjectTemplate,
        private string $bodyTemplate
    ) {
    }

    public function send(MailSender $mailSender): void
    {
        $subject = str_replace('{name}', $this->csvData->name, $this->subjectTemplate);
        $body = str_replace('{name}', $this->csvData->name, $this->bodyTemplate);
        $mailSender->sendEmail($this->csvData->email, $this->from, $subject, $body);
    }
}
