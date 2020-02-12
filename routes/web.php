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
Route::group(['prefix' => 'admin'], function(){
    Route::get('profile', 'Admin\ProfileController@index')->middleware('auth');
});

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/profile', 'ProfileController@add');
Route::post('/profile', 'ProfileController@create');

Route::get('/post/create', 'PostController@add');
Route::post('/post/create', 'PostController@create');

Route::get('/post/front', 'PostController@index');

Route::get('/post/{id}', 'PostController@show');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


