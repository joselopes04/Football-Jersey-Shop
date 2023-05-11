<?php

use App\Database\Connection;
use App\Database\QueryBuilder;

$connection = Connection::make();
$queryBuilder = new QueryBuilder($connection);

//Get product info
$club = $queryBuilder->findById('club',$id,'App\Model\Club'); //Get club Name
$products = $queryBuilder->filter('product',$id,'IDClub','App\Model\Product'); //Get Products from teh club
$numberProducts = $queryBuilder->selectCount('product',$id,'IDClub','App\Model\Product'); //Get Number of products
$brands = $queryBuilder->filterTwoTables('product', 'brand' ,$id,'IDBrand','Name','App\Model\Brand'); //Get brands from the club
$states = $queryBuilder->filterTwoTables('product', 'state' ,$id,'IDState','Name','App\Model\Brand'); // Get states of the products

$league =  $queryBuilder->findById('league',$club->IDLeague,'App\Model\League'); // Get the league name 
require 'views/shop.view.php';