<?php

use App\Database\Connection;
use App\Database\QueryBuilder;

$connection = Connection::make();
$queryBuilder = new QueryBuilder($connection);

$leagues = $queryBuilder->getAll('league','App\Model\League'); //Get all the Leagues

require 'views/league.view.php';