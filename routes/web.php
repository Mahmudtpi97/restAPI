<?php

/** @var \Laravel\Lumen\Routing\Router $router */

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

$router->get('/', function () use ($router) {
    return $router->app->version();
});

// multiple required route
$router->get('app/{name}/{age}',function($name,$age) {
 return $name.$age;
});

// multiple required and optional route
$router->get('app2/{name}/{age}[/{city}]',function($name,$age,$city=null) {
 return $name.' '.$age.' '.$city;
});

// Controller to  Router Data Send Communication
$router->get('home','firstController@first');
$router->get('home/{second}','firstController@second');
$router->get('home2/{third}','firstController@third');
$router->get('home3/{fourth}','firstController@fourth');
$router->get('home4/{five}','firstController@five');
$router->get('download','firstController@download');
$router->get('redirect','firstController@redirect');

// Sending and Caching
$router->post('catch','firstController@catch');

