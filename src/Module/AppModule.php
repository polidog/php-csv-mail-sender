<?php

declare(strict_types=1);

namespace Polidog\PhpCsvMailSender\Module;

use Polidog\PhpCsvMailSender\App\SendMessageProvider;
use Polidog\PhpCsvMailSender\Feature\CsvMailSender\UseCase\SendMessage;
use Ray\Di\AbstractModule;

class AppModule extends AbstractModule
{
    protected function configure(): void
    {
        $this->bind(SendMessage::class)->toProvider(SendMessageProvider::class);
    }
}
