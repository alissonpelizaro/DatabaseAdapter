<?php

declare(strict_types=1);

namespace App;

class MongoDB implements NoSqlInterface
{
    
    public function __construct()
    {
        echo "Conectado MongoBD\n";
    }

    public function executeQuery(string $collection): array
    {
        return [
            [
                'name: Alisson',
                'e-mail: a.pelizaro@vhsys.com.br'
            ],
            [
                'name: Michelle',
                'e-mail: m.sola@vhsys.com.br'
            ]
        ];
    }

    public function getDatabaseDriver(): string
    {
        return "mongodb";
    }
}