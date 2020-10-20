<?php

declare(strict_types=1);

namespace App;

interface NoSqlInterface
{
    
    public function executeQuery(string $collection): array;

    public function getDatabaseDriver(): string;

}