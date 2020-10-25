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

Route::get('/login', 'UserController@index')->name('user.index');
Route::post('/login', 'UserController@login')->name('user.login');
Route::resource('product', 'ProductController')->except('edit','update');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
