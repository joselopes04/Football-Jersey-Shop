<?php

use App\Database\Connection;
use App\Database\QueryBuilder;

$connection = Connection::make();
$queryBuilder = new QueryBuilder($connection);

//Get club info
$clubs = $queryBuilder->filter('club',8,'IDLeague','App\Model\Club');//Get all the clubs from a league

require 'views/club.view.php';