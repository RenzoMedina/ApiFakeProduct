<?php
include "config/cors.php";
use app\controller\ProductController;

//group of routes
Flight::group($_ENV['API_VERSION'], function(){
    //route of product
    $product = new ProductController();
    Flight::route("GET {$_ENV['API_URL']}", [$product, 'index']);
    Flight::route($_ENV['API_URL']."/@id", [$product, 'show']);
    Flight::route("POST {$_ENV['API_URL']}", [$product, 'create']);
});

Flight::start();