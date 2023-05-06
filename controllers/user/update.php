<?php

use App\Database\Connection;
use App\Database\QueryBuilder;

$connection = Connection::make();
$queryBuilder = new QueryBuilder($connection);

$queryBuilder->update('user',$id,[
    'FirstName' => $_POST['FirstName'],
    'Surname' => $_POST['Surname'],
    'Email' => $_POST['Email'],
    'Address' => $_POST['Address'],
    'Phone' => $_POST['Phone'],
]);

$_SESSION['firstName'] = $_POST['FirstName'];
$_SESSION['surname'] = $_POST['Surname'];
$_SESSION['email'] = $_POST['Email'];
$_SESSION['address'] = $_POST['Address'];
$_SESSION['phone'] = $_POST['Phone'];

redirect('userAccount');