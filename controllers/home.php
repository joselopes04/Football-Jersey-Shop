<?php

use App\Database\Connection;
use App\Database\QueryBuilder;

$connection = Connection::make();
$queryBuilder = new QueryBuilder($connection);

$newProducts = $queryBuilder->getLast4ByColumn('product','ID','App\Model\Product');

$popularProducts = $queryBuilder->getLast4ByColumn('product','Views','App\Model\Product');

require 'views/home.view.php';