<?php
//使用的是routes/admin.php
//这是分支提交测试，我就是玩玩~~~
use \Illuminate\Routing\Route;
//Route::group([
//    'prefix' => config('admin.route.prefix'),
//    'namespace' => config('admin.route.namespace')
//], function (Route $route) {
//    $route->get('/', 'HomeController@index');
//});
Route::get('/admin', function () {
    return 111;
});
