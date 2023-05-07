<?php

//Check if the user is already loged in
if (!isset($_SESSION['email'])) {
    redirect('loginView');
}

require 'views/userAccount.view.php';