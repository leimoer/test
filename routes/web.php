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
//用户登录
Route::get('/login','Admin\LoginController@index');
Route::post('/login','Admin\LoginController@store');
//后台首页
Route::resource('/','Admin\IndexController');
//用户列表
Route::resource('/users','Admin\UsersController');

//Route::get('/', function () {
//    return view('welcome');
//});
//登录
//Route::get('/login','LoginController');
////用户管理
//Route::resource('/user', 'UserController');
////短信验证
Route::resource('/redis','RedisController');
////图片上传
Route::post('/uploadFile','RedisController@uploadFile');  //绑定方法用@链接方法  只能用post和get传 绑定的路由不能用resource  any可以是post也可以是get