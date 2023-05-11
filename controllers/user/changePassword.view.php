<?php

use App\Database\Connection;
use App\Database\QueryBuilder;

$connection = Connection::make();
$queryBuilder = new QueryBuilder($connection);

//Verify if the user is already loged in
if (isset($_SESSION['email'])) {
    redirect('userAccount');
}


require 'views/user/changePassword.php';