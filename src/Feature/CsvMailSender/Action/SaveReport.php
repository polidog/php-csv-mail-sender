<?php

declare(strict_types=1);

namespace Polidog\PhpCsvMailSender\Feature\CsvMailSender\Action;

interface SaveReport
{
    public function saveReport(int $id, \DateTimeImmutable $time): void;
}
