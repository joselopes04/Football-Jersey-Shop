<?php

use App\Database\Connection;
use App\Database\QueryBuilder;

$connection = Connection::make();
$queryBuilder = new QueryBuilder($connection);


// check if the user is logged in
if (isset($_SESSION['userId'])) {
    //check if quantity is set
    if (!isset($_POST['quantity'])) {
        $_POST['quantity'] = 1;
    }

    if ($_POST['quantity'] <= 0) {
        $_SESSION["quantityError"] = "The quantity has to be positive";
        header("Location: {$_SERVER['HTTP_REFERER']}");
        exit();
    } else {
        unset($_SESSION["quantityError"]);
    }

    //check if shirtNumber is set
    if (!isset($_POST['shirtNumber']) || $_POST['shirtNumber'] == "") {
        $_POST['shirtNumber'] = null;
    }

    $id = $_SESSION['userId'];
    $products = $queryBuilder->filter('cart', $id, 'UserID', 'App\Model\Cart'); //Get the products in the cart

    $isTheProductInCart = false;
    //Check if the product is already in the cart
    foreach ($products as $product) {
        if ($product->productID == $_POST['ID'] && $product->Personalization == $_POST['personalization'] && $product->shirtNumber == $_POST['shirtNumber']) {
            $isTheProductInCart = true;
            //if the procut is already in the card update quantity
            $queryBuilder->update('cart', $product->ID, [
                'quantity' =>  $product->quantity + $_POST['quantity'],
            ]);
        }
    }
} else {
    redirect("loginView");
    exit();
}

if (!$isTheProductInCart) {
    $queryBuilder->create('cart', [
        'UserID' => $_SESSION['userId'],
        'productID' => $_POST['ID'],
        'quantity' => $_POST['quantity'],
        'Personalization' => $_POST['personalization'],
        'shirtNumber' => $_POST['shirtNumber'],
    ]);
}



redirect("shoppingCart");
