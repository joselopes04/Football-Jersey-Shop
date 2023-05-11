<?php

use App\Database\Connection;
use App\Database\QueryBuilder;

$connection = Connection::make();
$queryBuilder = new QueryBuilder($connection);

if ($_POST['Name'] && $_POST['Price'] && $_POST['Description'] && $_POST['Material'] && $_POST['Season'] && $_POST['Brand'] && $_POST['State'] && $_POST['Club'] && $_POST['typeOfKit']) {

    if (isset($_FILES['image'])) {
        // Set the folders
        $folder = "images/sellers/";
        $sellerID = $_SESSION['userId'];
        $productName = $_POST['Name'];
        $productFolder = $folder . $sellerID . '/' . $productName;

        //Create the folder for the product images
        if (!is_dir($productFolder)) {
            mkdir($productFolder, 0755, true);
        }

        $imagePaths = [];
        $files = array_filter($_FILES['image']['name']);
        //Move the files to the folder
        foreach ($files as $key => $value) {
            $file_name = basename($_FILES['image']['name'][$key]);
            $imagePaths[$key] = $productFolder . "/" . $file_name;
            move_uploaded_file($_FILES['image']['tmp_name'][$key], $imagePaths[$key]);
        }
    }

    //Set the unset image paths to null 
    foreach ($imagePaths as $imagePath) {
        if (!isset($imagePath)) {
            $imagePath = null;
        }
    }

    // Create the product on the database
    $queryBuilder->create('product', [
        'Name' => $_POST['Name'],
        'ImagePath' => $imagePaths[0],
        'ImagePath2' => $imagePaths[1],
        'ImagePath3' => $imagePaths[2],
        'ImagePath4' => $imagePaths[3],
        'ImagePath5' => $imagePaths[4],
        'Price' => $_POST['Price'],
        'Description' => $_POST['Description'],
        'Material' => $_POST['Material'],
        'Year' => $_POST['Season'],
        'IDBrand' => $_POST['Brand'],
        'IDSeller' => $_SESSION['userId'],
        'IDState' => $_POST['State'],
        'IDClub' => $_POST['Club'],
        'IDTypeOfKit' => $_POST['typeOfKit'],
    ]);
}
redirect('myProducts');


