<?php

use Illuminate\Support\Facades\Route;

Route::group(['prefix'=>'mogujie'], function () {
    Route::get('test', function() {
        return 'test';
    });
    Route::get('/', 'HomeController@index');

    Route::get('index/{name?}', 'LyearController@index');
    Route::get('user/list/{page?}', 'UserController@list');

});



