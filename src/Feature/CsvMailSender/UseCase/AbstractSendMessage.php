<?php

declare(strict_types=1);

namespace Polidog\PhpCsvMailSender\Feature\CsvMailSender\UseCase;

use Polidog\PhpCsvMailSender\Feature\CsvMailSender\Action\LoadCsv;
use Polidog\PhpCsvMailSender\Feature\CsvMailSender\Action\SaveReport;
use Polidog\PhpCsvMailSender\Feature\CsvMailSender\Action\SendEmail;
use Polidog\PhpCsvMailSender\Feature\CsvMailSender\Data\Message;
use Prewk\Result;

abstract class AbstractSendMessage implements SendMessage, LoadCsv, SaveReport, SendEmail
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
