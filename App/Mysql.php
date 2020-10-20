<?php

declare(strict_types=1);

namespace App;

class Mysql implements SqlInterface
{

    public function __construct()
    {
        echo "Conectado MySql\n";
    }

    public function select(string $query): array
    {
        return [
            [
                'name' => 'Alisson',
                'e-mail' => 'a.pelizaro@vhsys.com.br'
            ],
            [
                'name' => 'Michelle',
                'e-mail' => 'm.sola@vhsys.com.br'
            ]
        ];
    }

    public function getDatabaseDriver(): string
    {
        return "mysql";
    }
}