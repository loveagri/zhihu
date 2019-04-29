<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('/',function () { return redirect('/login'); });
Route::get('/register', '\App\Http\Controllers\RegisterController@index');
Route::post('/register', '\App\Http\Controllers\RegisterController@register');
Route::get('/login', '\App\Http\Controllers\LoginController@index');
Route::post('/login', '\App\Http\Controllers\LoginController@login');

Route::group(['middleware'=>'auth:web'],function ()
{
    Route::get('/logout', '\App\Http\Controllers\LoginController@logout');
    Route::get('/user/me/setting', '\App\Http\Controllers\UserController@setting');
    Route::post('/user/me/setting', '\App\Http\Controllers\UserController@settingStore');

    Route::get('/posts', '\App\Http\Controllers\PostController@index');
    Route::get('/posts/create', '\App\Http\Controllers\PostController@create');
    Route::get('/posts/{post}/delete', '\App\Http\Controllers\PostController@delete');
    Route::post('/posts/image/upload', '\App\Http\Controllers\PostController@imageUpload');
    Route::get('/posts/{post}', '\App\Http\Controllers\PostController@show');
    Route::post('/posts', '\App\Http\Controllers\PostController@store');
    Route::get('/posts/{post}/edit', '\App\Http\Controllers\PostController@edit');
    Route::put('/posts/{post}', '\App\Http\Controllers\PostController@update');

    Route::post('/posts/{post}/comment','\App\Http\Controllers\PostController@comment');
});


