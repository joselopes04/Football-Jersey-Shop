<?php
use App\Database\Connection;
use App\Database\QueryBuilder;

$connection = Connection::make();
$queryBuilder = new QueryBuilder($connection);

$productInfo = $queryBuilder->findById('product',$id);

//Delete the product on the database
$product = $queryBuilder->deleteById('product',$id);

//Set the folder path
$folder = "images/sellers/";
$sellerID = $_SESSION['userId'];
$productName = $productInfo->Name;
$productFolder = $folder . $sellerID . '/' . $productName;

//Delete the folder with the product images 
rmdir($productFolder);

redirect('myProducts');