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
    Route::any('/manage', 'LectureController@manage');
    Route::any('/manage/{date}', 'LectureController@appointment');
    Route::get('/approval', 'PagesController@approval');
    Route::get('/history-lecturer', 'HistoryController@index');
    Route::get('/lecturer', 'PagesController@lecturer');
    Route::get('/', 'PagesController@lecturer');
});

Route::group(['middleware' => ['auth', 'student']], function() {
    Route::get('/history-student', 'HistoryController@index');
    Route::get('/makeappointment_', 'StudentController@makeappointment');
    Route::get('/student', 'PagesController@student');
    Route::get('/', 'PagesController@student');
    Route::get('/makeappointment', function(){
        $users = DB::table('users')->where('usertype','Lecturer')->select ('usertype','name')->get();
        return view('pages.makeappointment', compact ('users'));
    });
});

Route::get('/home', 'HomeController@index');
Route::get('/login', 'PagesController@login');

Auth::routes(['register' => false]);