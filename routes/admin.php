<?php

use Illuminate\Support\Facades\Route;

Route::group(['prefix'=>'mogujie', 'middleware' => ['admin']], function () {
    Route::get('test', function() {
        return 'test';
    });
    Route::get('/', 'HomeController@index');

    Route::get('index/{name?}', 'LyearController@index');
    Route::get('user/list/{page?}', 'UserController@lists')->name('user');
    Route::get('user/delete', 'UserController@delete')->name('user.delete');
    Route::post('user/set', 'UserController@set')->name('user.set');
    Route::get('menu', 'MenuController@index')->name('menu');
    Route::post('menu/post', 'MenuController@post')->name('menu.post');
});;



