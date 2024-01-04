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

$router->post('/makanan','ControllerMakanan@create');

$router->get('/makanan','ControllerMakanan@index');

$router->put('/makanan/update/{id}','ControllerMakanan@update');

$router->delete('/makanan/delete/{id}','ControllerMakanan@delete');

$router->get('/makanan/detail/{id}','ControllerMakanan@detail');

$router->post('/transaksi','ControllerTransaksi@create');

$router->get('/transaksi','ControllerTransaksi@index');

$router->put('/transaksi/update/{id}','ControllerTransaksi@update');

$router->delete('/transaksi/delete/{id}','ControllerTransaksi@delete');

$router->get('/transaksi/detail/{id}','ControllerTransaksi@detail');


$router->group(['middleware' => 'basicAuth'], function () use ($router) 
{
    $router->get('/makanan', 'ControllerMakanan@index');
});

$router->group(['middleware' => 'basicAuth'], function () use ($router) 
{
    $router->get('/transaski', 'ControllerTransaksi@index');
});

