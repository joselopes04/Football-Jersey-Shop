<?php

use App\Database\Connection;
use App\Database\QueryBuilder;

$connection = Connection::make();
$queryBuilder = new QueryBuilder($connection);

if (isset($_POST['password'])) {
    $user =  $queryBuilder->selectByColumn('user', $_POST['email'], 'email', 'App\Model\User'); // Get the user info

    if ($user === false) {
        redirect('loginView');
        exit();
    }
  
    if ($_POST['password'] && password_verify($_POST['password'], $user->Password)) {
        session_start();
        $_SESSION['userId'] = $user->ID;
        $_SESSION['firstName'] = $user->FirstName;
        $_SESSION['surname'] = $user->Surname;
        $_SESSION['email'] = $user->Email;
        $_SESSION['address'] = $user->Address;
        $_SESSION['phone'] = $user->Phone;
        redirect('userAccount');
    } else {
        redirect('loginView');
    }
}