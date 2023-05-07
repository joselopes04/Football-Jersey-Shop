<?php

use App\Database\Connection;
use App\Database\QueryBuilder;

$connection = Connection::make();
$queryBuilder = new QueryBuilder($connection);

//Get product info
$product = $queryBuilder->findById('product',$id,'App\Model\Product'); //Get Product
$club = $queryBuilder->findById('club',$product->IDClub,'App\Model\Product'); //Get Club
$typeOfKit = $queryBuilder->findById('typeofkit',$product->IDTypeOfKit,'App\Model\Product'); //Get the kit
$brand = $queryBuilder->findById('brand',$product->IDBrand,'App\Model\Product'); //Get the brand
$league = $queryBuilder->findById('league',$club->IDLeague,'App\Model\Product'); //Get the League

require 'views/productView.php';