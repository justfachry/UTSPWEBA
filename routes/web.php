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
    return view('home');
});


Route::get('/login', 'AuthController@login')->name('login');
Route::post('/postlogin', 'AuthController@postlogin');
Route::get('/logout', 'AuthController@logout');

Route::get('/dashboard','DashboardController@index')->middleware('auth');
Route::get('/student','StudentController@index')->middleware('auth');
Route::post('/student/create','StudentController@create')->middleware('auth');
Route::get('/student/{id}/edit','StudentController@edit')->middleware('auth');
Route::post('/student/{id}/update','StudentController@update')->middleware('auth');
Route::get('/student/{id}/delete','StudentController@delete')->middleware('auth');
Route::get('/student/{id}/profile','StudentController@profile')->middleware('auth');


Route::get('/teacher','TeacherController@index')->middleware('auth');
Route::post('/teacher/create','TeacherController@create')->middleware('auth');
Route::get('/teacher/{id}/edit','TeacherController@edit')->middleware('auth');
Route::post('/teacher/{id}/update','TeacherController@update')->middleware('auth');
Route::get('/teacher/{id}/delete','TeacherController@delete')->middleware('auth');