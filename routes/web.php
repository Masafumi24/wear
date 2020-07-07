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

Route::get('/', 'FashionController@index')->name('fashions.index');

Route::get('/fashions/create', 'FashionController@showCreateForm')->name('fashions.create');
Route::post('/fashions/create', 'FashionController@create');

Route::get('/fashions/show', 'FashionController@show');