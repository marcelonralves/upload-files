<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::get('users', 'Api\\UserController@showUsers');
Route::post('users', 'Api\\UserController@createUser');
Route::get('user/{id}', 'Api\\UserController@showUser');
Route::put('users/{id}', 'Api\\UserController@editUser');
Route::delete('user/{id}', 'Api\\UserController@deleteUser');
