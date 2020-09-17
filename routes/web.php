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

Route::get('/','HomeController@home');

Route::resource('/categories','CategoryController');
Route::resource('/post','PostController');


    Auth::routes();

Route::get('/home', 'HomeController@home')->name('home');
Route::get('/logout','App\Http\Controllers\Auth\LoginController@logout');