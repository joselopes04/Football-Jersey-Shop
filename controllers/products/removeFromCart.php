<?php
use App\Database\Connection;
use App\Database\QueryBuilder;

$connection = Connection::make();
$queryBuilder = new QueryBuilder($connection);

//Delete Product
$product = $queryBuilder->deleteById('cart',$id);

redirect('shoppingCart');