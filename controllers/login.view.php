<?php

//Verify if the user is already loged in
if (isset($_SESSION['email'])) {
    redirect('userAccount');
}

require 'views/user/login.php';