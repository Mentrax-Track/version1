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

Route::get('/', function()
{
	return View::make('hello');
});
Route::get('admin', function()
{
	return View::make('admin/admin');
});

Route::get('slide', function()
{
	return View::make('users.slide');
});

//Route::get('calendario', function()
//{
//	return View::make('users.calendario');
//});

Route::resource('calendario','CalendarioController');

