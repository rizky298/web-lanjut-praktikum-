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
Route::resource('rental','CustomerController');
Auth::routes();

Route::get('/home', 'CustomerController@index')->name('home');

Route::resource('PPL','PplController');
Auth::routes();

Route::get('/ppl', 'PplController@index')->name('ppl');