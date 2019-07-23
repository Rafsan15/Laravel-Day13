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
Route::get('/user/home','UserController@Home')->name('user.home');
Route::get('/user/register','UserController@UserRegister')->name('user.register');
Route::get('/user/login','UserController@UserLogin')->name('user.login');
Route::get('/user/about','UserController@AboutUs')->name('user.about');
Route::get('/user/contactUs','UserController@ContactUs')->name('user.contactUs');
