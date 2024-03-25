<?php

declare(strict_types=1);

namespace Polidog\PhpCsvMailSender\Feature\CsvMailSender\Action;

use Polidog\PhpCsvMailSender\Feature\CsvMailSender\Data\CsvData;

interface SortName
{
    /**
     * @param array<CsvData> $csvDataList
     *
     * @return array<CsvData>
     */
    public function sortName(array $csvDataList): array;
}
