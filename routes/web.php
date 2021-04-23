<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/listproducts','ProductsController@index')->name('index');

Route::match(['get', 'post'],'add','ProductsController@add')->name('add');

Route::match(['get', 'post'],'/edit/{id}','ProductsController@edit')->name('edit');

Route::get('/delete/{id}', 'ProductsController@delete')->name('delete');

Route::fallback(function(){
    return view('welcome');
});
