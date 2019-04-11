<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('getApi', 'CustomerController@getAll')->name('getApi');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('logout',['as'=>'logout', 'uses'=>'CustomerController@logOut']);

Route::group(['prefix' => 'login' ], function (){
   Route::get('getLogin', 'CustomerController@getLogin')->name('getLogin') ;
   Route::post('getLogin', 'CustomerController@postLogin')->name('postLogin');

   Route::get('getRegister', 'CustomerController@getRegister')->name('getRegister');
   Route::post('getRegister', 'CustomerController@postRegister')->name('postRegister');
});

Route::group(['prefix' => 'list', 'middleware'=>'auth'], function (){
   Route::get('customers', 'CustomerController@getCustomer') ->name('list');
   Route::get('formAdd', 'CustomerController@formAdd')->name('formAdd');
   Route::post('formAdd', 'CustomerController@store')->name('store');

   Route::get('{id}/edit', 'CustomerController@edit')->name('edit');
   Route::post('{id}/edit', 'CustomerController@update')->name('update');
   Route::get('{id}/delete', 'CustomerController@destroy')->name('destroy');

   Route::post('search', 'CustomerController@search')->name('search');
});
Route::group(['prefix' => 'slides', 'middleware' => 'auth'], function (){
   Route::get('slide', 'SlideController@getAll')->name('slide');
   Route::get('store', 'SlideController@store')->name('store');
   Route::post('store', 'SlideController@create')->name('create');
});
Route::group(['prefix'=>'home'], function(){
    Route::get('index', 'SlideController@index')->name('index');
});
Route::get('content', function (){
   return view('home.content');
});
