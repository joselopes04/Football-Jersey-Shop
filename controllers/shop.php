<?php

use App\Database\Connection;
use App\Database\QueryBuilder;

$connection = Connection::make();
$queryBuilder = new QueryBuilder($connection);

$club = $queryBuilder->findById('club',$id,'App\Model\Club');

require 'views/shop.view.php';