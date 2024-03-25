<?php

declare(strict_types=1);

namespace Polidog\PhpCsvMailSender\Feature\CsvMailSender\UseCase;

use Prewk\Result;

interface SendMessage
{
    /**
     * @return Result<null, string>
     */
    public function execute(string $path): Result;
}
