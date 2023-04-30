<?php

/* home page */
$router->get('', function() {
    require 'controllers/home.php';
});

/* league View */
$router->get('leagueView', function() {
    require 'controllers/leagues.show.php';
});

/*  shop View */
$router->get('terms', function() {
    require 'controllers/terms.php';
});

/*  clubs View */
$router->get('league/(\d+)', function($id) {
    require 'controllers/clubs.show.php';
});

/*  shop View */
$router->get('club/(\d+)', function($id) {
    require 'controllers/shop.php';
});

/* Product View */
$router->get('product/(\d+)', function($id) {
    require 'controllers/product.php';
});

// Deal with the User
/* Log in */
$router->get('loginView', function() {
    require 'controllers/login.view.php';
});

// Login
$router->post('login', function() {
    require 'controllers/login.php';
});

/* Register */
$router->get('register', function() {
    require 'controllers/register.php';
});

/* Create User  */
$router->post('createUser', function() {
    require 'controllers/createUser.php';
});

/* User Account */
$router->get('userAccount', function() {
    require 'controllers/userAccount.php';
});