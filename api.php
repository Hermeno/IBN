<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserApi;

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

Route::get('/users', [UserApi::class, 'listAllUser']);
Route::post('/users/create', [UserApi::class, 'createUser']);
Route::get('/users/{id}', [UserApi::class, 'selectOneUser']);
Route::put('/users/{id}', [UserApi::class, 'updateById']);
Route::delete('/users/{id}', [UserApi::class, 'destroyUser']);