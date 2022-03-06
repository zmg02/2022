<?php

use Illuminate\Support\Facades\Route;

Route::group(['prefix' => 'mogujie', 'namespace' => 'Mogujie', 'middleware' => ['admin']], function () {
    Route::get('/', 'HomeController@index');

    Route::get('index/{name?}', 'LyearController@index');
    Route::get('user/list/{page?}', 'UserController@lists')->name('user');
    Route::get('user/delete', 'UserController@delete')->name('user.delete');
    Route::post('user/set', 'UserController@set')->name('user.set');

    Route::resource('menu', 'MenuController');
    Route::resource('role', 'RoleController');
    Route::resource('permission', 'PermissionController');
    Route::get('icon/{name}', 'MenuController@icon')->name('icon');
});


    Auth::routes();

    Route::get('/home', 'HomeController@index')->name('home');

