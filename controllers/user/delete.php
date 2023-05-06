<?php

use App\Database\Connection;
use App\Database\QueryBuilder;

$connection = Connection::make();
$queryBuilder = new QueryBuilder($connection);

$user = $queryBuilder->deleteById('user',$id);

session_unset();
session_destroy();

redirect('loginView');