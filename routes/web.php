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

Route::get('/register', '\App\Http\Controllers\RegisterController@index');
Route::post('/register', '\App\Http\Controllers\RegisterController@register');
Route::get('/login', ['as' => 'login', 'uses' => '\App\Http\Controllers\LoginController@index']);
Route::post('/login', '\App\Http\Controllers\LoginController@login');

Route::group(['middleware' => 'auth:web'], function () {
    Route::get('/logout', '\App\Http\Controllers\LoginController@logout');

    Route::get('/posts/search', '\App\Http\Controllers\PostController@search');

    Route::get('/posts', '\App\Http\Controllers\PostController@index');
    Route::get('/posts/{post}/zan', '\App\Http\Controllers\PostController@zan');
    Route::get('/posts/{post}/unzan', '\App\Http\Controllers\PostController@unzan');
    Route::get('/posts/create', '\App\Http\Controllers\PostController@create');
    Route::get('/posts/{post}/delete', '\App\Http\Controllers\PostController@delete');
    Route::post('/posts/image/upload', '\App\Http\Controllers\PostController@imageUpload');
    Route::get('/posts/{post}', '\App\Http\Controllers\PostController@show');
    Route::post('/posts', '\App\Http\Controllers\PostController@store');
    Route::get('/posts/{post}/edit', '\App\Http\Controllers\PostController@edit');
    Route::put('/posts/{post}', '\App\Http\Controllers\PostController@update');

    Route::post('/posts/{post}/comment', '\App\Http\Controllers\PostController@comment');

    Route::get('/user/{user}', '\App\Http\Controllers\UserController@show');
    Route::post('/user/{user}/fan', '\App\Http\Controllers\UserController@fan');
    Route::post('/user/{user}/unfan', '\App\Http\Controllers\UserController@unfan');

    Route::get('/user/me/setting', '\App\Http\Controllers\UserController@setting');
    Route::post('/user/{user}/setting', '\App\Http\Controllers\UserController@settingStore');

    Route::get('/topic/{topic}', '\App\Http\Controllers\TopicController@show');
    Route::post('/topic/{topic}/submit', '\App\Http\Controllers\TopicController@submit');
    Route::get('/', '\App\Http\Controllers\PostController@index');

    Route::get('/notices', '\App\Http\Controllers\NoticeController@index');
});



Route::group(['prefix' => 'admin'], function () {
    Route::get('/login', '\App\Admin\Controllers\LoginController@index');
    Route::post('/login', '\App\Admin\Controllers\LoginController@login');

    Route::group(['middleware' => 'auth:admin'], function () {
        Route::get('/home', '\App\Admin\Controllers\HomeController@index');
        Route::get('/logout', '\App\Admin\Controllers\LoginController@logout');

        Route::group(['middleware' => 'can:system'], function () {
            Route::get('/users', '\App\Admin\Controllers\UserController@index');
            Route::get('/users/create', '\App\Admin\Controllers\UserController@create');
            Route::post('/users/store', '\App\Admin\Controllers\UserController@store');
            Route::get('/users/{user}/role', '\App\Admin\Controllers\UserController@role');
            Route::post('/users/{user}/role', '\App\Admin\Controllers\UserController@storeRole');

            Route::get('/roles', '\App\Admin\Controllers\RoleController@index');
            Route::get('/roles/create', '\App\Admin\Controllers\RoleController@create');
            Route::post('/roles/store', '\App\Admin\Controllers\RoleController@store');
            Route::get('/roles/{role}/permission', '\App\Admin\Controllers\RoleController@permission');
            Route::post('/roles/{role}/permission', '\App\Admin\Controllers\RoleController@storePermission');

            Route::get('/permissions', '\App\Admin\Controllers\PermissionController@index');
            Route::get('/permissions/create', '\App\Admin\Controllers\PermissionController@create');
            Route::post('/permissions/store', '\App\Admin\Controllers\PermissionController@store');
        });

        Route::group(['middleware' => 'can:post'], function () {
            Route::get('/posts', '\App\Admin\Controllers\PostController@index');
            Route::post('/posts/{post}/status', '\App\Admin\Controllers\PostController@status');
        });


        // 专题模块
        Route::group(['middleware' => 'can:topic'], function(){
            Route::resource('topics', '\App\Admin\Controllers\TopicController', ['only' => [
                'index', 'create', 'store', 'destroy'
            ]]);
        });

        // 通知模块
        Route::group(['middleware' => 'can:notice'], function(){
            Route::resource('notices', '\App\Admin\Controllers\NoticeController', [
                'only' => ['index', 'create', 'store'],
            ]);
        });
    });
});
