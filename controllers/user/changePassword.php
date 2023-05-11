<?php

use App\Database\Connection;
use App\Database\QueryBuilder;

$connection = Connection::make();
$queryBuilder = new QueryBuilder($connection);

//Verify if the user is already loged in
if (isset($_SESSION['email'])) {
    redirect('userAccount');
}

//Verify if the passowrds are filled
if (isset($_POST['password']) && strlen($_POST['password'])>2 &&isset($_POST['password2']) && strlen($_POST['password2'])>2) {

    $user =  $queryBuilder->selectByColumn('user', $_SESSION['resetPasswordMail'], 'email', 'App\Model\User'); // Get the user info

    if($_POST['password'] == $_POST['password2']){
        $queryBuilder->update('user',$user->ID,[
            'password' => password_hash($_POST['password'], PASSWORD_DEFAULT)
        ]);
        redirect('loginView');
    }else{
        $_SESSION['ErrorChangePassword'] = "Passwords dont match";
        redirect('changePassword');
    }

}else{
    redirect('changePassword');
    $_SESSION['ErrorChangePassword'] = "Enter the passwords";
    exit();
}

require 'views/user/changePassword.php';