<?php

use App\Database\Connection;
use App\Database\QueryBuilder;
use App\Model\Brand;
use App\Model\State;

$connection = Connection::make();
$queryBuilder = new QueryBuilder($connection);

//Get the searchTerm
$searchTerm = $_POST['search'];

//Get the products
$products = $queryBuilder->searchByColumn('product', $searchTerm, 'Name', 'App\Model\Product'); //Get with base of the search
$numberOfResults = count($products); //Get the number of products

//Get the brands for each jersey
$brandsRaw = [];
foreach ($products as $product) {
    $brandId = $product->IDBrand;
    $brand = $queryBuilder->findById('brand', $brandId, 'App\Model\Brand');
    $brandsRaw[] = $brand->Name;
}

//Treat the data to get delete duplicates
$counts = array_count_values($brandsRaw);
$names = array_keys($counts);

//Rearrange the data on a new array
$brands = [];
foreach ($names as $index => $name) {
    $count = $counts[$name]; 
    $brand = new Brand();
    $brand->Name = $name;
    $brand->Count = $count;
    $brands[] = $brand;
}

//Get the state for each jersey
$statesRaw = [];
foreach ($products as $product) {
    $stateId = $product->IDState;
    $state = $queryBuilder->findById('state', $stateId, 'App\Model\Brand');
    $statesRaw[] = $state->Name;
}

//Treat the data to get delete duplicates
$counts = array_count_values($statesRaw);
$names = array_keys($counts);

//Rearrange the data on a new array
$states = [];
foreach ($names as $index => $name) {
    $count = $counts[$name]; 
    $state = new State();
    $state->Name = $name;
    $state->Count = $count;
    $states[] = $state;
}

require 'views/shop.view.php';
