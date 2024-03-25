<?php

declare(strict_types=1);

namespace Polidog\PhpCsvMailSender\App;

use Polidog\PhpCsvMailSender\App\Action\LoadCsvTrait;
use Polidog\PhpCsvMailSender\App\Action\SaveReportTrait;
use Polidog\PhpCsvMailSender\App\Action\SendEmailTrait;
use Polidog\PhpCsvMailSender\Feature\CsvMailSender\UseCase\AbstractSendMessage;
use Polidog\PhpCsvMailSender\Library\CsvLoader\CsvLoader;
use Polidog\PhpCsvMailSender\Library\Mailer\Mailer;

final class SendMessageProvider extends AbstractSendMessage
{
    use LoadCsvTrait;
    use SendEmailTrait;
    use SaveReportTrait;

    public function __construct(
        private readonly CsvLoader $csvLoader,
        private readonly Mailer $mailer,
        private readonly \PDO $pdo,
        string $fromAddress,
        string $subjectTemplate,
        string $bodyTemplate
    ) {
        $this->formAddress = $fromAddress;
        $this->subjectTemplate = $subjectTemplate;
        $this->bodyTemplate = $bodyTemplate;
    }
}
