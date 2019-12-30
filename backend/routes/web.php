<?php

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

Route::get('api/book', 'BookController@index');
Route::post('api/book', 'BookController@store');
Route::get('api/book/{id}', 'BookController@show');
Route::put('api/book/{id}', 'BookController@update');
Route::delete('api/book/{id}', 'BookController@destroy');
