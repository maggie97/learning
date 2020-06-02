<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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

Route::resource('/children', 'ChildController');
Route::get('/home', 'HomeController@index')->name('home');

Route::resource('/children', 'ChildController');

Route::get('/nosotros', function () {
    return view('nosotros');
})->name('nosotros');


