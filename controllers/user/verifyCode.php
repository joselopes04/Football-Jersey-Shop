<?php

use App\Database\Connection;
use App\Database\QueryBuilder;

$connection = Connection::make();
$queryBuilder = new QueryBuilder($connection);


//Verify if the code is filled
if (isset($_POST['code']) && strlen($_POST['code'])>2) {

    $user =  $queryBuilder->selectByColumn('user', $_SESSION['resetPasswordMail'], 'email', 'App\Model\User'); // Get the user info

    if($user->tmpKey == $_POST['code']){

        //Check if the key is older than 5 minutes
        $diff = $now->diff($keyDate);
        if ($diff->i >= 5) {
            $_SESSION['ErrorVerificationCode'] = "The key is expired";
            redirect('verificationCode');
        } else {
            redirect('changePassword');
            exit();
        }

     
    }else{
        $_SESSION['ErrorVerificationCode'] = "The code is incorrect";
        redirect('verificationCode');
    }

}else{
    redirect('verificationCode');
    $_SESSION['ErrorVerificationCode'] = "Enter the code";
    exit();
}