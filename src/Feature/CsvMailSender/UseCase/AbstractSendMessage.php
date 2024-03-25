<?php

declare(strict_types=1);

namespace Polidog\PhpCsvMailSender\Feature\CsvMailSender\UseCase;

use Polidog\PhpCsvMailSender\Feature\CsvMailSender\Data\Message;
use Polidog\PhpCsvMailSender\Feature\CsvMailSender\Feature\CsvLoader;
use Polidog\PhpCsvMailSender\Feature\CsvMailSender\Feature\MailSender;
use Polidog\PhpCsvMailSender\Feature\CsvMailSender\Feature\Reporter;
use Prewk\Result;

abstract class AbstractSendMessage implements SendMessage, CsvLoader, Reporter, MailSender
{
    protected string $formAddress;
    protected string $subjectTemplate;
    protected string $bodyTemplate;

    final public function execute(string $path): Result
    {
        try {
            foreach ($this->loadCsv($path) as $csvData) {
                $message = new Message($csvData, $this->formAddress, $this->subjectTemplate, $this->bodyTemplate);
                $message->send($this);
                $this->saveReport($csvData->id, new \DateTimeImmutable());
            }

            return new Result\Ok(null);
        } catch (\Exception $e) {
            return new Result\Err($e->getMessage());
        }
    }
}
