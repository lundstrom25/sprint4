<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', 'HomeController@index');
Route::get('form', 'FormController@index');
Route::post('form', 'FormController@submit');

Route::get('admin', 'AdminController@index');
Route::get('instructor', 'InstructorController@index');
Route::get('home', 'HomeController@index');
Route::get('welcome', 'HomeController@index');

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);
