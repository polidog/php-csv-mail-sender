<?php

declare(strict_types=1);

namespace Polidog\PhpCsvMailSender\Feature\CsvMailSender\Feature;

interface Reporter
{
    public function saveReport(int $id, \DateTimeImmutable $time): void;
}
