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

route::get('/','DashboardController@index');
route::get('/dashboard','DashboardController@dashboard');
route::get('/stats/{id}','DashboardController@show')->name('id');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
