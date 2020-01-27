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

//Route::resource('/','HomeController');
Route::resource('staff','StaffController');
Route::resource('inquiry','InquiryController');
Route::resource('course','CourseController');
Route::resource('student','StudentController');
Route::get('/login', function () {
    return view('auth.login');
   });
Route::resource('/dashboard','AdminController');
   

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
