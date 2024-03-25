<?php

declare(strict_types=1);

namespace Polidog\PhpCsvMailSender\Feature\CsvMailSender\Data;

readonly class CsvData
{
    public function __construct(
        public int $id,
        public string $name,
        public string $email
    ) {
    }
}
