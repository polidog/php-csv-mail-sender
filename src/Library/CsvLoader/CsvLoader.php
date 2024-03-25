<?php

declare(strict_types=1);

namespace Polidog\PhpCsvMailSender\Library\CsvLoader;

interface CsvLoader
{
    public function loadCsv(string $path): iterable;
}
