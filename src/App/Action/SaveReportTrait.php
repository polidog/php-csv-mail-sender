<?php

namespace Polidog\PhpCsvMailSender\App\Action;

trait SaveReportTrait
{
    private readonly \PDO $pdo;

    private function saveReport(int $id, \DateTimeImmutable $time): void
    {
        $this->pdo->prepare('INSERT INTO report (id, time) VALUES (:id, :time)')
            ->execute(['id' => $id, 'time' => $time->format('Y-m-d H:i:s')]);
    }
}