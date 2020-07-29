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

Route::get('/', 'PagesController@index');
Route::get('/event', 'PagesController@events');
Route::get('/gallery', 'PagesController@gallery');
Route::get('/location', 'PagesController@location');
Route::get('/people', 'PagesController@people');
Route::get('/visit', 'PagesController@visit');
