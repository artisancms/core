<?php

Route::group(['middleware' => ['web', 'auth']], function () {

    Route::get('dashboard', function () {
        return view('admin::pages.examples.blank');
    });

});

Route::group(['middleware' => 'web'], function () {
    Route::get('login', 'ArtisanCMS\CMS\Http\Controllers\Auth\LoginController@showLoginForm')->name('login');
    Route::post('login', 'ArtisanCMS\CMS\Http\Controllers\Auth\LoginController@login');
    Route::get('logout', 'ArtisanCMS\CMS\Http\Controllers\Auth\LoginController@logout');
});
