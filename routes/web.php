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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home','HomeController@index')->name('home');

Route::get('/boards', 'BoardController@index');

Route::get('/boards/create', 'BoardController@create');

Route::post('/boards', 'BoardController@store');

Route::get('/boards/{board}', 'BoardController@show');

Route::post(
    '/boards/{board}/lists',
    'BoardListController@store'
);

Route::post(
    '/lists/{list}/cards',
    'CardController@store'
);
