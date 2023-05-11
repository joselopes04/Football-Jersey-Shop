<?php

use App\Database\Connection;
use App\Database\QueryBuilder;

$connection = Connection::make();
$queryBuilder = new QueryBuilder($connection);

//Verify if the email is filled

if (!isset($_POST['email'])||  strlen($_POST['email'])<4 ) {
    redirect('resetPassword');
    $_SESSION['ErrorResetPassword'] = "Enter a email";

}else{
    
    $user =  $queryBuilder->selectByColumn('user', $_POST['email'], 'email', 'App\Model\User'); // Get the user info

    //Save the mail on a local variable  to use it on the verification code 
    $_SESSION['resetPasswordMail'] = $_POST['email'];

    //Verify if the user exists
    if ($user === false) {
        redirect('resetPassword');
        $_SESSION['ErrorResetPassword'] = "User not Found";
        exit();
    }

    //Generate a key
    $key = bin2hex(random_bytes(3));
    
    //Get current date
    date_default_timezone_set('Europe/Lisbon');
    $time = time();
    $keyDate = date("Y-m-d H:i:s", $time);

    //Save the key and the date on the DB
    $queryBuilder->update('user',$user->ID,[
        'tmpKey' => $key,
        'keyDate' => $keyDate
    ]);

    $to = "joselopes5589@gmail.com";
    $subject = "Test Email";
    $message = "This is a test email sent from PHP.";
    $headers = "From: sender@example.com\r\n";
    $headers .= "Reply-To: sender@example.com\r\n";
    $headers .= "Content-Type: text/html\r\n";
    
    if (mail($to, $subject, $message, $headers)) {
      echo "Email sent successfully!";
    } else {
        redirect('');  
    }
    
    redirect('verificationCode');
}