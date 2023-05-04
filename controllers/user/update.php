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

redirect('userAccount');