<?php

declare(strict_types=1);

namespace App;

interface SqlInterface
{
    
    public function select(string $query): array;

    public function getDatabaseDriver(): string;

}