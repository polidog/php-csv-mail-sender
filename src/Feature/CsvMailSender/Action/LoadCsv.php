<?php

declare(strict_types=1);

namespace Polidog\PhpCsvMailSender\Feature\CsvMailSender\Action;

use Polidog\PhpCsvMailSender\Feature\CsvMailSender\Data\CsvData;

interface LoadCsv
{
    /**
     * @return array<CsvData[]>
     */
    public function loadCsv(string $path): iterable;
}
