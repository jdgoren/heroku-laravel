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

// Auth::routes();
// Authentication Routes...
$this->get('login', 'Auth\LoginController@showLoginForm')->name('login');
$this->post('login', 'Auth\LoginController@login');
$this->post('logout', 'Auth\LoginController@logout')->name('logout');

Route::get('movies/{movie}/watch', ['uses' => 'HomeController@watch', 'as' => 'movies.watch']);
Route::get('movies/{movie}/unwatch', ['uses' => 'HomeController@unwatch', 'as' => 'movies.unwatch']);

Route::get('/', 'HomeController@index');
