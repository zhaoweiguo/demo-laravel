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



Route::get('foreach/demo1', function() {
  $users = array();

  for($i=0; $i<10; $i++) {
    $item = array();
    $item['id'] = $i;
    $item['name'] = "Name-$i";
    $item['mac'] = 'mac';
    $item['imei'] = 'imei';
    $item['status'] = 'online';
    $item['created_at'] = '';
    $item['updated_at'] = '';
    $users[] = $item;
  }


  return View::make('foreach.demo1')->with('users', $users);
});





Route::get('/', function()
{
	return View::make('hello');
});
