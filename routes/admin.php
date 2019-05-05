<?php

Route::group(['prefix' => 'admin'], function () {
    Route::get('/login', '\App\Admin\Controllers\LoginController@index');
    Route::post('/login', '\App\Admin\Controllers\LoginController@login');

    Route::group(['middleware' => 'auth:admin'], function () {
        Route::get('/home', '\App\Admin\Controllers\HomeController@index');
        Route::get('/logout', '\App\Admin\Controllers\LoginController@logout');

        Route::get('/users', '\App\Admin\Controllers\UserController@index');
        Route::get('/users/create', '\App\Admin\Controllers\UserController@create');
        Route::post('/users/store', '\App\Admin\Controllers\UserController@store');

        Route::get('/posts', '\App\Admin\Controllers\PostController@index');
        Route::post('/posts/{post}/status', '\App\Admin\Controllers\PostController@status');

    });

});


