<?php

declare(strict_types=1);

namespace Polidog\PhpCsvMailSender\Library\CsvLoader;

use League\Csv\Exception;
use League\Csv\Reader;
use League\Csv\UnavailableStream;

class LeagueCsvLoader implements CsvLoader
{
    /**
     * @throws Exception
     * @throws UnavailableStream
     */
    public function loadCsv(string $path): iterable
    {
        $csv = Reader::createFromPath($path, 'r');
        $csv->setHeaderOffset(0);

        return $csv->getRecords();
    }
}
