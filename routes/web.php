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


// esta vista desde el layout de admin
Route::get('admin/login', function () {
    return view('login');
});


// vistas desde el front
Route::view('/', 'welcome');
Auth::routes();



Route::get('/login/admin', 'Auth\LoginController@showAdminLoginForm');
Route::get('/login/blogger', 'Auth\LoginController@showBloggerLoginForm');
Route::get('/register/admin', 'Auth\RegisterController@showAdminRegisterForm');
Route::get('/register/blogger', 'Auth\RegisterController@showBloggerRegisterForm');

Route::post('/login/admin', 'Auth\LoginController@adminLogin');
Route::post('/login/blogger', 'Auth\LoginController@bloggerLogin');
Route::post('/register/admin', 'Auth\RegisterController@createAdmin');
Route::post('/register/blogger', 'Auth\RegisterController@createBlogger');

Route::view('/home', 'home')->middleware('auth');
Route::view('/admin', 'admin');
Route::view('/blogger', 'blogger');
	






