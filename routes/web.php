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
$router->post('catchbody','firstController@catchbody');


// Write SQL Query to Caching data from database
$router->get('allData','EmployeeController@allData');
$router->post('/insertData','EmployeeController@insertData');
$router->put('/updateData','EmployeeController@updateData');
$router->delete('/deleteData','EmployeeController@deleteData');

// Use Laravel Docs to Caching data from database
$router->get('allData2','EmployeeController2@allData');
$router->post('/dataInsert','EmployeeController2@dataInsert');
$router->put('/dataUpdate','EmployeeController2@dataUpdate');
$router->delete('/dataDelete','EmployeeController2@dataDelete');

// Use Laravel Model to Caching data from database
$router->get('allData3','EmployeeController3@allData');
$router->post('/dataInsert3','EmployeeController3@dataInsert');
$router->put('/dataUpdate4','EmployeeController3@dataUpdate');
$router->delete('/dataDelete5','EmployeeController3@dataDelete');


// Aggregates Using Model
$router->get('count','EmployeeController3@count');
$router->get('sum','EmployeeController3@sum');
$router->get('max','EmployeeController3@max');
$router->get('min','EmployeeController3@min');
$router->get('avg','EmployeeController3@avg');

// Authentication Check Route
$router->get('AuthAllData',['middleware'=>'auth','uses'=>'EmployeeController3@allData']);

// Lumen Host Server
// php -S localhost:8000 -t public
