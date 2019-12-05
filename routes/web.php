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
    Route::get('/', 'UsersController@index');
});

Route::group(['middleware' => ['auth', 'lecturer']], function() {
    Route::resource('lectures', 'LectureController');
    Route::get('lecturer/{id}/cancel', ['uses' => 'LectureController@cancel', 'as' => 'lectures.cancel']);
    Route::get('lecturer/{id}/update', ['uses' => 'LectureController@update', 'as' => 'lectures.update']);
    Route::any('/manage', 'LectureController@manage');
    Route::any('/manage/{date}', 'LectureController@appointment');
    Route::get('/approval', 'PagesController@approval');
    Route::get('/history-lecturer', 'HistoryController@index');
    Route::get('/lecturer', 'LectureController@index');
    Route::get('/', 'LectureController@index');
});

Route::group(['middleware' => ['auth', 'student']], function() {
    Route::resource('students', 'StudentController');
    Route::get('/history-student', 'HistoryController@index');
    Route::any('/makeappointment_/{date}/{name}', 'StudentController@makeappointment_');
    Route::get('/student', 'StudentController@index');
    Route::get('/', 'StudentController@index');
    Route::get('student/{id}/cancel', ['uses' => 'StudentController@cancel', 'as' => 'students.cancel']);
    Route::get('/makeappointment', 'StudentController@makeappointment');
});

Route::get('/home', 'HomeController@index');
Route::get('/login', 'PagesController@login');

Auth::routes(['register' => false]);