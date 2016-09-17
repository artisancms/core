<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    return view('theme::blog');
});

Route::get('post', function () {
    return view('theme::post');
});

Route::get('about', function () {
    return view('theme::about');
});

Route::get('contact', function () {
    return view('theme::contact');
});

Route::get('/home', 'HomeController@index');
