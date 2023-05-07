<?php

use App\Database\Connection;
use App\Database\QueryBuilder;

$connection = Connection::make();
$queryBuilder = new QueryBuilder($connection);

//Check if the form is not empty
if (isset($_POST['password']) && isset($_POST['email'])) {
    $user =  $queryBuilder->selectByColumn('user', $_POST['email'], 'email', 'App\Model\User'); // Get the user info

    //Check if the user exists
    if ($user === false) {
        redirect('loginView');
        $_SESSION['Error'] = "User not Found";
        exit();
    }

    //Check if the password is currect
    if ($_POST['password'] && password_verify($_POST['password'], $user->Password)) {
        unset($_SESSION['Error']);
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
        $_SESSION['Error'] = "Password or email Incorrect";
    }
}else{
    redirect('loginView');
}
