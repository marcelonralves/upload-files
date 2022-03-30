<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\UserController;

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

Route::get('users', 'App\\Http\\Controllers\\Api\\UserController@showUsers');
Route::post('user', 'App\\Http\\Controllers\\Api\\UserController@createUser');
Route::get('user/{id}', 'App\\Http\\Controllers\\Api\\UserController@showUser');
Route::put('users/{id}', 'App\\Http\\Controllers\\Api\\UserController@editUser');
Route::delete('user/{id}', 'App\\Http\\Controllers\\Api\\UserController@deleteUser');
