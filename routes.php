<?php

// VIEWS
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

// Login View
$router->get('loginView', function() {
    require 'controllers/login.view.php';
});

// My products
$router->get('myProducts', function() {
    require 'controllers/products/myProducts.show.php';
});

/* Register */
$router->get('register', function() {
    require 'controllers/register.view.php';
});

/* User Account */
$router->get('userAccount', function() {
    require 'controllers/userAccount.php';
});

// Deal with the User
/* Log in */
$router->post('login', function() {
    require 'controllers/user/login.php';
});

//Lougout
$router->get('logout', function() {
    require 'controllers/user/logout.php';
});

/* Create User  */
$router->post('createUser', function() {
    require 'controllers/user/create.php';
});

/* Update User  */
$router->patch('updateUser/(\d+)', function($id) {
    require 'controllers/user/update.php';
});

/* Delete User  */
$router->delete('deleteUser/(\d+)', function($id) {
    require 'controllers/deleteUser.php';
});

//Deal with the products
/* Delete User  */
$router->post('createProduct', function() {
    require 'ccontrollers\products\create.php';
});
