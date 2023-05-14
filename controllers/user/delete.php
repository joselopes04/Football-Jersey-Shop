<?php

use App\Database\Connection;
use App\Database\QueryBuilder;

$connection = Connection::make();
$queryBuilder = new QueryBuilder($connection);

//Delete the user on the database
$user = $queryBuilder->deleteUserById('user',$id);

//Delete session variables
session_unset();
session_destroy();

redirect('loginView');