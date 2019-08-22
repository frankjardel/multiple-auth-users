<?php
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Routes for Auth Admin
|
*/

Route::get('admin/dashboard','Admin\HomeController@index');

Route::get('admin','Admin\LoginController@showLoginForm')->name('admin.login');

Route::post('admin','Admin\LoginController@login');

Route::post('admin/password/email','Admin\ForgotPasswordController@sendResetLinkEmail')->name('admin.password.email');

Route::get('admin/password/reset', 'Admin\ForgotPasswordController@showLinkRequestForm')->name('admin.password.request');


Route::post('admin/password/reset','Admin\ResetPasswordController@reset');

Route::get('admin/password/reset/{token}','Admin\ResetPasswordController@showResetForm')->name('admin.password.reset');