<?php

use App\Database\Connection;
use App\Database\QueryBuilder;

$connection = Connection::make();
$queryBuilder = new QueryBuilder($connection);


// Create the product on the database

if (isset($_SESSION['userId'])) {
    if (!isset($_POST['quantity'])) {
        $_POST['quantity'] = 1;
    }
    if (!isset($_POST['shirtNumber']) || $_POST['shirtNumber'] == "" ) {
        $_POST['shirtNumber'] = null;
    }

    $queryBuilder->create('cart', [
        'UserID' => $_SESSION['userId'],
        'productID' => $_POST['ID'],
        'quantity' => $_POST['quantity'],
        'Personalization'=> $_POST['personalization'],
        'shirtNumber'=> $_POST['shirtNumber'],
    ]);
} else {
    redirect("loginView");
    exit();
}



redirect("shoppingCart");
