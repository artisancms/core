<?php

Route::group(['middleware' => 'auth'], function () {
    Route::get('admin', function () {
        return view('admin::pages.examples.login');
    });
});


Route::get('login', function () {
    return view(config('artisancms.views.login'));
});
