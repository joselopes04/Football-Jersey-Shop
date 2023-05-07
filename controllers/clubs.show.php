<?php

use App\Database\Connection;
use App\Database\QueryBuilder;

$connection = Connection::make();
$queryBuilder = new QueryBuilder($connection);

//Get club info
$clubs = $queryBuilder->filter('club',$id,'IDLeague','App\Model\Club');//Get all the clubs from a league
$league =  $queryBuilder->findById('league',$clubs[1]->IDLeague,'App\Model\League'); // Get the league name 

require 'views/club.view.php';