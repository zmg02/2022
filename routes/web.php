<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

Route::prefix('mogujie')->group(function () {
    Route::get('/', 'Mogujie\HomeController@index');
    Route::match(['get', 'post'], 'register','Mogujie\IndexController@register');
    Route::match(['get', 'post'], 'login','Mogujie\IndexController@login');
//    Route::get('/', 'Mogujie\HomeController@index');
//    Route::get('/', 'Mogujie\HomeController@index');
//    Route::get('/', 'Mogujie\HomeController@index');
});
