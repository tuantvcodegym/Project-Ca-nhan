<?php

use Illuminate\Http\Request;

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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
Route::get('/get', 'CustomerController@getAll');
Route::post('/create', 'CustomerController@create');
Route::get('/edit/{id}', 'CustomerController@editApi');
Route::post('/edit/{id}', 'CustomerController@updateApi');
Route::get('/delete/{id}', 'CustomerController@deleteApi');
