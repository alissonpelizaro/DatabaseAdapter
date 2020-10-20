<?php 

include "vendor/autoload.php";

use App\MongoDB;
use App\Mysql;
use App\NoSqlAdapter;
use App\UsersRepository;

$mysql = new Mysql();

$mongobd = new MongoDB();
$noSqlAdapter = new NoSqlAdapter($mongobd);

$repository = new UsersRepository($noSqlAdapter);

$users = $repository->getAll();

print_r($users);