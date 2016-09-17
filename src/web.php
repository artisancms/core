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
    $theme = new ArtisanCMS\Theme\Theme();
    return $theme->view('blog');
});

Route::get('post', function () {
    $theme = new ArtisanCMS\Theme\Theme();
    return $theme->view('post');
});

Route::get('about', function () {
    $theme = new ArtisanCMS\Theme\Theme();
    return $theme->view('about');
});

Route::get('contact', function () {
    $theme = new ArtisanCMS\Theme\Theme();
    return $theme->view('contact');
});

Route::get('/home', 'HomeController@index');
