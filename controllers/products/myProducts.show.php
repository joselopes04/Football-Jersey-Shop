<?php

if (!isset($_SESSION['email'])) {
    redirect('loginView');
}


use App\Database\Connection;
use App\Database\QueryBuilder;

$connection = Connection::make();
$queryBuilder = new QueryBuilder($connection);

//Get product info
$typeOfKits = $queryBuilder->getAll('typeofkit','App\Model\State'); //Get all the types of kit
$states = $queryBuilder->getAll('state','App\Model\State'); //Get all the States
$brands = $queryBuilder->getAll('brand','App\Model\Brand'); //Get all the Brands
$clubs = $queryBuilder->getAll('club','App\Model\Club'); //Get all the Clubs
$numberProducts = $queryBuilder->selectCount('product',$_SESSION['userId'],'IDSeller','App\Model\Product'); //Get Number of products
$myProducts = $queryBuilder->filter('product',$_SESSION['userId'],'IDSeller','App\Model\Product');//Get all the clubs from a league

require 'views/myProducts.php';