<?php

declare(strict_types=1);

namespace App;

class UsersRepository
{

    private $database;

    public function __construct(SqlInterface $database)
    {
        $this->database = $database;
    }

    public function getAll(): array
    {
        switch ($this->database->getDatabaseDriver()){
            case 'mysql':
                $users = $this->database->select("SELECT * FROM users LIMIT 2");
            break;
            case 'mongodb':
                $users = $this->database->select('users');
            break;
            default:
                throw new \Exception('Driver inexistente');
        }

        return $users;
    }

}