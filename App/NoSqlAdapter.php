<?php

declare(strict_types=1);

namespace App;

class NoSqlAdapter implements SqlInterface
{

    private $noSql;

    public function __construct(NoSqlInterface $noSql)
    {
        $this->noSql = $noSql;
    }

    public function select(string $query): array
    {
        return $this->noSql->executeQuery($query);
    }

    public function getDatabaseDriver(): string
    {
        return $this->noSql->getDatabaseDriver();
    } 

}