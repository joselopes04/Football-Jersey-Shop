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
$state = $queryBuilder->findById('state',$product->IDState,'App\Model\State'); //Get the State

$clubs = $queryBuilder->getAll('club','App\Model\Club'); //Get all the Clubs
$typeOfKits = $queryBuilder->getAll('typeofkit','App\Model\State'); //Get all the types of kit
$states = $queryBuilder->getAll('state','App\Model\State'); //Get all the States
$brands = $queryBuilder->getAll('brand','App\Model\Brand'); //Get all the Brands

require 'views/products/product.edit.php';