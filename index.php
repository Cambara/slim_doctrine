<?php

require_once 'bootstrap.php';
use App\login\controller\LoginController;

$app = new  Slim\App();


 //routes
$app->get('/user/', function ($request, $response, $args) {
    $response->write("Welcome to Slim!");
    $controller = new LoginController();
    $users = $controller->listUser();
    return $response;
});

$app->run();