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

// Auth::routes();

// Auth routes
Route::get('/registro','Auth\RegisterController@showRegistrationForm');

Route::post('/register','Auth\RegisterController@register')->name('register');

Route::post('/logout','Auth\LoginController@logout ')->name('logout');

Route::get('/login','Auth\LoginController@showLoginForm')->name('login');
  
Route::get('/home', 'HomeController@index')->name('home');
