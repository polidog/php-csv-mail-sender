<?php

namespace Polidog\PhpCsvMailSender\App\Action;

use Polidog\PhpCsvMailSender\Feature\CsvMailSender\Data\CsvData;
use Polidog\PhpCsvMailSender\Library\CsvLoader\CsvLoader;

trait LoadCsvTrait
{
    private readonly CsvLoader $csvLoader;

    /**
     * @return array<CsvData[]>
     */
    public function loadCsv(string $path): iterable
    {
        foreach ($this->csvLoader->loadCsv($path) as $item) {
            yield new CsvData((int)$item['id'], $item['name'], $item['email']);
        }
    }
}