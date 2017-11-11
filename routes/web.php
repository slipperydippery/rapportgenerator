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

Route::get('/', ['as' => 'home', 'uses' => 'PagesController@home']);

Route::resource('sector', 'SectorsController');
Route::resource('functie', 'FunctiesController');
Route::resource('element', 'ElementsController');

Route::get('/api/sector/', 'ApiController@indexsector');
Route::get('/api/functie/', 'ApiController@indexfunctie');
Route::get('/api/element/{sector}/{functie}', 'ApiController@getelement');
Route::get('/api/specials', 'ApiController@getspecials');