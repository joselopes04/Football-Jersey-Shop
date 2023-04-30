<?php

use App\Database\Connection;
use App\Database\QueryBuilder;

$connection = Connection::make();
$queryBuilder = new QueryBuilder($connection);

$queryBuilder->create('user',[
    'FirstName' => $_POST['FirstName'],
    'Surname' => $_POST['Surname'],
    'Email' => $_POST['Email'],
    'Address' => $_POST['Address'],
    'Phone' => $_POST['Phone'],
    'Password' => password_hash($_POST['Password'], PASSWORD_DEFAULT)
]);

redirect('loginView');