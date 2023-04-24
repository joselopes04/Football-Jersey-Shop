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

/* SignIn */
$router->get('login', function() {
    require 'controllers/login.php';
});

/* Login */
$router->get('register', function() {
    require 'controllers/register.php';
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
$router->get('productView', function() {
    require 'controllers/productView.php';
});