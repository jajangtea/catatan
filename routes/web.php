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


$router->get('/key', function (){
   return 'hello';
});

$router->get('/catatans', 'CatatanController@index');
$router->post('/catatan/store', 'CatatanController@store');
$router->put('/catatan/{id}', 'CatatanController@update');
$router->get('/catatan/{id}', 'CatatanController@show');
$router->delete('/catatan/{id}', 'CatatanController@destroy');
