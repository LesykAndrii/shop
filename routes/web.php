<?php
use App\Goods;
use Illuminate\Support\Facades\Input;
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

Route::get('/categories/{url}', [
    'uses' =>'\App\Http\Controllers\CategoriesController@categoryAction'
]);


Route::get('/goods/{url}',[
   'uses' =>'\App\Http\Controllers\GoodsController@showAction'
]);

Route::any('/order',[
    'uses' =>'\App\Http\Controllers\OrdersController@AddGoods'
    ]);


//Route::get('/order_success',[
 //   'uses' =>'\App\Http\Controllers\OrdersController@successAction'
//]);


Route::any('/search',[
    'uses' =>'\App\Http\Controllers\SearchController@index'
]);


Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
