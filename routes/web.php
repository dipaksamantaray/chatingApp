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

Route::group(['prefix' => 'admin'], function () {
    Route::get('/login', 'AdminAuth\LoginController@showLoginForm')->name('login');
    Route::post('/login', 'AdminAuth\LoginController@login');
    Route::post('/logout', 'AdminAuth\LoginController@logout')->name('logout');

    Route::get('/register', 'AdminAuth\RegisterController@showRegistrationForm')->name('register');
    Route::post('/register', 'AdminAuth\RegisterController@register');

    Route::post('/password/email', 'AdminAuth\ForgotPasswordController@sendResetLinkEmail')->name('password.request');
    Route::post('/password/reset', 'AdminAuth\ResetPasswordController@reset')->name('password.email');
    Route::get('/password/reset', 'AdminAuth\ForgotPasswordController@showLinkRequestForm')->name('password.reset');
    Route::get('/password/reset/{token}', 'AdminAuth\ResetPasswordController@showResetForm');
});

Route::get('order/create', 'HomeController@createOrder');
Route::post('order/save', 'HomeController@saveOrder');
// charting Start
Route::get('chart/create', 'HomeController@createChart');
// Charting End
// ajax rout for charting
Route::get('/message/{id}', 'HomeController@getMessage');
Route::post('/message', 'HomeController@sendMessage');
// end
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::post('/update-profile', 'HomeController@updateProfile');
Route::post('/change-password/{id}', 'HomeController@changePasswordSave');
