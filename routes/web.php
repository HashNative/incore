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




Route::resource('/', 'HomeController')->middleware('AuthenticateMiddleware');
Route::resource('staff','UserController')->middleware('AuthenticateMiddleware');
Route::resource('inquiry','InquiryController')->middleware('AuthenticateMiddleware');
Route::resource('profile','ProfileController')->middleware('AuthenticateMiddleware');
Route::resource('batch','BatchController')->middleware('AuthenticateMiddleware');

Route::resource('course','CourseController')->middleware('AuthenticateMiddleware');
Route::resource('student','StudentController')->middleware('AuthenticateMiddleware');
Route::resource('follow_up','FollowupController')->middleware('AuthenticateMiddleware');
Route::resource('assign','AssignController')->middleware('AuthenticateMiddleware');



Route::resource('admin','AdminController')->middleware('AuthenticateMiddleware');

Route::resource('/dashboard','AdminController')->middleware('AuthenticateMiddleware');
Route::resource('/home1','HomeController')->middleware('AuthenticateMiddleware');
Route::resource('/home','HomeController')->middleware('AuthenticateMiddleware');
Route::get('inquiry/myinquiry', [ 'as' => 'myinquiry', 'uses' => 'InquiryController@myinquiry']);