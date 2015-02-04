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



Route::get('foreach/demo1', 'ForeachController@demo1');

Route::get('foreach/demo_if', 'ForeachController@demo_if');





Route::get('/', function()
{
	return View::make('hello');
});
