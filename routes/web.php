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

Auth::routes();

Route::get('/game/bubbles', 'GameController@bubbles')->name('bubbles');
Route::get('/game/memory', 'GameController@memory')->name('memory');
Route::get('/game', 'GameController@index')->name('games');

Route::get('/home', 'HomeController@index')->name('home');
