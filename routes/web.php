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
Route::group(['middleware'=>'web'],function(){
    Auth::routes();
});

Route::group(['middleware'=>'auth','prefix'=>'management'],function(){
   
});
Route::get('/', function () {
    return view('welcome');
});



Route::get('/home', 'HomeController@index')->name('home');
Route::resource('staff','UserController');
Route::resource('inquiry','InquiryController');
Route::resource('course','CourseController');
Route::resource('student','StudentController');
Route::resource('follow_up','FollowupController');
Route::get('/myinquiry','InquiryController@myinquiry');

Route::resource('/dashboard','AdminController');
Route::resource('/home1','HomeController');
