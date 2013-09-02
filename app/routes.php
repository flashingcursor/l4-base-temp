<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', 'HomeController@showWelcome');

// Admin Panel Routes
Route::get('admin/logout',  array('as' => 'admin.logout',      'uses' => 'App\Controllers\Admin\AuthController@getLogout'));
Route::get('admin/login',   array('as' => 'admin.login',       'uses' => 'App\Controllers\Admin\AuthController@getLogin'));
Route::post('admin/login',  array('as' => 'admin.login.post',  'uses' => 'App\Controllers\Admin\AuthController@postLogin'));

Route::group(array('prefix' => 'admin', 'before' => 'auth.admin'), function()
	{
		// TODO: non-existant admin controllers
	    Route::any('/',                'App\Controllers\Admin\DashboardController@index');
	    Route::resource('dashboard',   'App\Controllers\Admin\DashboardController');
	    Route::resource('articles',    'App\Controllers\Admin\ArticlesController');
	    Route::resource('pages',       'App\Controllers\Admin\PagesController');
	});// Confide routes
Route::get( 'user/create',                 'UserController@create');
Route::post('user',                        'UserController@store');
Route::get( 'user/login',                  'UserController@login');
Route::post('user/login',                  'UserController@do_login');
Route::get( 'user/confirm/{code}',         'UserController@confirm');
Route::get( 'user/forgot_password',        'UserController@forgot_password');
Route::post('user/forgot_password',        'UserController@do_forgot_password');
Route::get( 'user/reset_password/{token}', 'UserController@reset_password');
Route::post('user/reset_password',         'UserController@do_reset_password');
Route::get( 'user/logout',                 'UserController@logout');