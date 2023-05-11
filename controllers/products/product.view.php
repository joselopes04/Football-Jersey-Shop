<?php

use App\Database\Connection;
use App\Database\QueryBuilder;

$connection = Connection::make();
$queryBuilder = new QueryBuilder($connection);

//Get product info
$product = $queryBuilder->findById('product', $id, 'App\Model\Product'); //Get Product
$club = $queryBuilder->findById('club', $product->IDClub, 'App\Model\Product'); //Get Club
$typeOfKit = $queryBuilder->findById('typeofkit', $product->IDTypeOfKit, 'App\Model\Product'); //Get the kit
$brand = $queryBuilder->findById('brand', $product->IDBrand, 'App\Model\Product'); //Get the brand
$league = $queryBuilder->findById('league', $club->IDLeague, 'App\Model\Product'); //Get the League
$state = $queryBuilder->findById('state', $club->IDState, 'App\Model\Product'); //Get the State

//check if the user already have the viewdProducts array
if (!isset($_SESSION['viewedProducts'])) {
    $_SESSION['viewedProducts'] = [];
}

if (!in_array($id, $_SESSION['viewedProducts'])) {
    array_push($_SESSION['viewedProducts'], $id);
    $updatedViews = $product->Views +1;

    //update the view the product on the database
    $queryBuilder->update('product', $id, [
        'Views' => $updatedViews,
    ]);
}

$history = [];

foreach ($_SESSION['viewedProducts'] as $id) {
    $product = $queryBuilder->findById('product', $id, 'App\Model\Product'); //Get Product
    array_unshift($history,$product);
}


require 'views/productView.php';
