<?php

if (!isset($_SESSION['email'])) {
    redirect('loginView');
}

require 'views/userAccount.view.php';