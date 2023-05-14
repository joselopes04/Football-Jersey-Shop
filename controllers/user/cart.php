<?php

use App\Database\Connection;
use App\Database\QueryBuilder;

$connection = Connection::make();
$queryBuilder = new QueryBuilder($connection);

//Verify if the user is already loged in
if (!isset($_SESSION['email'])) {
    redirect('loginView');
}

$id = $_SESSION['userId'];
$totalPrice = 0;

$products = $queryBuilder->filter('cart',$id,'UserID','App\Model\Cart'); //Get the products in the cart

foreach ($products as $product ) {
    $productInfo = $queryBuilder->findById('product', $product->productID, 'App\Model\Brand');
    $product->Name = $productInfo->Name;
    $product->price = $productInfo->Price;
    $product->image = $productInfo->ImagePath;
    $totalPrice += $product->price * $product->quantity;
}

require 'views/user/shoppingCart.php';
