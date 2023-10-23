<?php

/** @var \Laravel\Lumen\Routing\Router $router */

use Illuminate\Support\Facades\Route;

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


Route::post('login', 'AuthController@login');
Route::post('logout', 'AuthController@logout');

// ROUTES WITH AUTH
Route::group(['middleware' => 'auth:api'], function () {
    
    Route::get('me', 'UserController@me');
    Route::get('users', 'UserController@getUsers');
    Route::post('refresh', 'AuthController@refresh');

    Route::group(['prefix' => 'contas/pagar'], function () {
        Route::get('/', 'ContasPagarController@getAll');
        Route::get('/{id}', 'ContasPagarController@getById');
        Route::post('/', 'ContasPagarController@insert');
        Route::post('/{id}', 'ContasPagarController@update');
        Route::delete('/{id}', 'ContasPagarController@delete');
    });

});
