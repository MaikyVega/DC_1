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

Route::get('/', function () {return view('welcome');}) -> name('home');

Route::get('/panel', function () {return view('master.panel');});

// Daycare creation routes
route::get('/daycares','DaycareController@index');
route::get('/daycares/{daycare}', 'DaycareController@show')->where(['daycare' => '[0-9]+']);
Route::get('/daycares/create', 'DaycareController@create');
Route::post('/daycares', 'DaycareController@store');
