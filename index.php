<?php

require_once 'bootstrap.php';
use App\login\controller\LoginController;
use App\util\service\ClassService;
$app = new  Slim\App();
$classService = new ClassService();

 //routes
$app->get('/user/', function ($request, $response, $args) {
    echo 'list<br>';
    $controller = new LoginController();
    $logins = $controller->getList();
    print_r($logins);

});
$app->get('/user/{id}', function ($request, $response, $args) {
    echo 'one<br>';
    $controller = new LoginController();
    $login = $controller->getLogin($args['id']);
    print_r($login);
});
$app->put('/user/',function ($request, $response,$args){
    $l = $request->getParsedBody()['login'];
    $controller = new LoginController();
    $resp = $controller->addLogin($l);
    print_r($resp);

});
$app->post('/user/',function($request,$response,$args){
    $l = $request->getParsedBody()['login'];
    $controller = new LoginController();
    $resp = $controller->editLogin($l);
    print_r($resp);
});
$app->delete('/user/{id}',function($request,$response,$args){
    $controller = new LoginController();
    $resp = $controller->removeLogin($args['id']);
    print_r($resp);
});
$app->run();