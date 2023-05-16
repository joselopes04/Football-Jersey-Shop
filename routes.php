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

/*  terms and conditions View */
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
    require 'controllers/products/product.view.php';
});

// Login View
$router->get('loginView', function() {
    require 'controllers/login.view.php';
});

/* Register */
$router->get('register', function() {
    require 'controllers/register.view.php';
});

/* User Account */
$router->get('userAccount', function() {
    require 'controllers/user/userAccount.view.php';
});

/* Get the reset password View  */
$router->get('resetPassword', function() {
    require 'controllers/resetPassword.view.php';
});

/* Get the verification code View  */
$router->get('verificationCode', function() {
    require 'controllers/user/verificationCode.view.php';
});

/* Get the national teams  */
$router->get('nationalTeams', function() {
    require 'controllers/nationalTeams.show.php';
});

/* Get the other clubs  */
$router->get('otherClubs', function() {
    require 'controllers/otherClubs.view.php';
});

/******************* Deal with the User *******************/ 
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
    require 'controllers/user/delete.php';
});

/* Get send the password reset email  */
$router->patch('resetPasswordDB', function() {
    require 'controllers/user/resetPassword.php';
});

//Verify code
$router->post('verifyCode', function() {
    require 'controllers/user/verifyCode.php';
});

/* change password  */
$router->get('changePassword', function() {
    require 'controllers/user/changePassword.view.php';
});

/* change password DB */
$router->post('changePasswordDB', function() {
    require 'controllers/user/changePassword.php';
});

// My products
$router->get('shoppingCart', function() {
    require 'controllers/user/cart.php';
});

/******************* Deal with the products *******************/ 
// My products
$router->get('myProducts', function() {
    require 'controllers/user/myProducts.view.php';
});

/* Create Product  */
$router->post('createProduct', function() {
    require 'controllers/products/create.php';
});

/* Get the edit Product View  */
$router->get('editProduct/(\d+)', function($id) {
    require 'controllers/products/edit.view.php';
});

/*Edit Product  */
$router->patch('updateProduct/(\d+)', function($id) {
    require 'controllers/products/edit.php';
});

/* Delete Product  */
$router->delete('deleteProduct/(\d+)', function($id) {
    require 'controllers/products/delete.php';
});

//Search Product
$router->post('searchProduct', function() {
    require 'controllers/products/search.php';
});

/* Add to cart  */
$router->post('addToCart', function() {
    require 'controllers/products/addToCart.php';
});

/* Delete Product from teh cart  */
$router->delete('removeFromCart/(\d+)', function($id) {
    require 'controllers/products/removeFromCart.php';
});
