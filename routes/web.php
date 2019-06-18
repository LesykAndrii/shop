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
    return view('layouts/main');
});

Route::get('/categories/{id}', [
    'uses' =>'\App\Http\Controllers\CategoriesController@categoryAction'
]);


Route::get('/categories/{url}', [
    'uses' =>'\App\Http\Controllers\CategoriesController@categoryAction'
]);


Route::get('/goods/{id}',[
   'uses' =>'\App\Http\Controllers\GoodsController@showAction'
]);

Route::get('/order/{id}',[
    'uses' =>'\App\Http\Controllers\OrdersController@buyAction'
]);
Route::get('/order_success',[
    'uses' =>'\App\Http\Controllers\OrdersController@successAction'
]);
