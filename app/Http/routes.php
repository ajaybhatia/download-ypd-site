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

use downloads\Build;

Route::get('/', function () {
	$builds = Build::all();
    return view('welcome', ['builds' => $builds]);
});

Route::auth();

Route::resource('builds', 'BuildController');
