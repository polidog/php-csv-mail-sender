<?php

declare(strict_types=1);

namespace Polidog\PhpCsvMailSender\Feature\CsvMailSender\Feature;

use Polidog\PhpCsvMailSender\Feature\CsvMailSender\Data\CsvData;

interface CsvLoader
{
    /**
     * @return array<CsvData[]>
     */
    public function loadCsv(string $path): iterable;
}
