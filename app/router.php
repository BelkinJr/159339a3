<?php
use PHPRouter\RouteCollection;
use PHPRouter\Router;
use PHPRouter\Route;

$collection = new RouteCollection();

$collection->attachRoute(
    new Route(
        '/',
        array(
            '_controller' => 'vbelkin\a3\controller\HomeController::indexAction',
            'methods' => 'GET',
            'name' => 'Home'
        )
    )
);

$collection->attachRoute(
    new Route(
        '/account/',
        array(
        '_controller' => 'vbelkin\a3\controller\AccountController::indexAction',
        'methods' => ['GET','POST'],
        'name' => 'accountIndex'
        )
    )
);

$collection->attachRoute(
    new Route(
        '/account/create/',
        array(
        '_controller' => 'vbelkin\a3\controller\AccountController::createAction',
        'methods' => ['GET','POST'],
        'name' => 'accountCreate'
        )
    )
);


$collection->attachRoute(
    new Route(
        '/account/logout',
        array(
            '_controller' => 'vbelkin\a3\controller\AccountController::accountLogout',
            'methods' => 'GET',
            'name' => 'Logout'
        )
    )
);

$collection->attachRoute(
    new Route(
        '/account/login/',
        array(
            '_controller' => 'vbelkin\a3\controller\AccountController::loginAction',
            'methods' => 'GET',
            'name' => 'accountLogin'
        )
    )
);

$collection->attachRoute(
    new Route(
        '/account/jquery/',
        array(
            '_controller' => 'vbelkin\a3\controller\AccountController::ifUsernameFree',
            'methods' => 'POST',
            'name' => 'usernameCheck'
        )
    )
);

$router = new Router($collection);
$router->setBasePath('/');
return $router;