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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/healthcheck', function () {
    return view('healthcheck');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/php-version', function () {
    return view('phpVersion');
});
