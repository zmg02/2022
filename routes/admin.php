<?php

use Illuminate\Support\Facades\Route;

Route::group(['prefix'=>'mogujie', 'middleware' => ['admin','web']], function () {
    Route::get('test', function() {
        return 'test';
    });
    Route::get('/', 'HomeController@index');

    Route::get('index/{name?}', 'LyearController@index');
    Route::get('user/list/{page?}', 'UserController@lists')->name('user');
    Route::get('user/delete', 'UserController@delete')->name('user.delete');
    Route::post('user/set', 'UserController@set')->name('user.set');
    Route::any('menu', 'MenuController@index')->name('menu');
    Route::get('menu/delete/{id}', 'MenuController@delete')->name('menu.delete');
    Route::get('menu/get_menu/{id}', 'MenuController@getMenuInfo')->name('menu.get');
    Route::post('menu/post', 'MenuController@post')->name('menu.post');
    // Route::get('role', 'RoleController@index')->name('role');
    // Route::get('role/{id}', 'RoleController@getRole')->name('role.get');
    // Route::put('role/{id}', 'RoleController@update')->name('role.put');
    Route::resource('role', 'RoleController');
});



