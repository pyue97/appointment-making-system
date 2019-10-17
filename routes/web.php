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

Route::group(['middleware' => ['auth', 'admin']], function() {
    Route::resource('users', 'UsersController');
    Route::get('/admin', 'UsersController@index');
    Route::get('/', 'UsersController@index');
});

Route::group(['middleware' => ['auth', 'lecturer']], function() {
    Route::get('/approval', 'PagesController@approval');
    Route::get('/history', 'PagesController@history');
    Route::get('/home', 'HomeController@index');
    Route::get('/', 'HomeController@index');
});

Route::group(['middleware' => ['auth', 'student']], function() {
    Route::get('/history', 'PagesController@history');
    Route::get('/makeappointment', 'PagesController@makeappointment');
    Route::get('/home', 'HomeController@index');
    Route::get('/', 'HomeController@index');
});

Route::get('/home', 'HomeController@index');
Route::get('/login', 'PagesController@login');

Auth::routes(['register' => false]);