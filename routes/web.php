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
Route::get('/create/department', 'HomeController@create')->name('create');
Route::get('/index', 'HomeController@index')->name('home');
Route::post('/store','HomeController@store')->name('store');
Route::get('/form/delete/{id}','HomeController@delete');
Route::post('/update','HomeController@update')->name('from.update');
Route::get('/form/edit/{id}','HomeController@edit');
Route::get('/createNew','HomeController@create');
Route::get('/create/student','StudentsController@createStudentEntry');

Route::post('/store/student','StudentsController@storeStudentEntry')->name('storeStudentEntry');
Route::get('/index/student', 'StudentsController@index')->name('home');
Route::get('/index/student/view', 'StudentsController@indexView');
Route::get('/student/delete/{id}','StudentsController@delete');
Route::get('/student/edit/{id}','StudentsController@edit');
Route::post('/student/update','StudentsController@update');

