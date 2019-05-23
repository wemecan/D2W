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

Route::get('/', function () {
    return view('login');
});
Route::get('/login', 'd2w\IndexController@login');
Route::get('/indexone', 'd2w\IndexController@index');
Route::post('/is_login', 'd2w\IndexController@is_login');
Route::get('/setting', 'd2w\IndexController@setting');
Route::get('/logout', 'd2w\IndexController@logout');
Route::post('/SetType', 'd2w\SettingController@SetType');
Route::post('/SetAccount', 'd2w\SettingController@SetAccount');
Route::post('/ssssgo', 'd2w\Discuz2wpController@d2w');
Route::post('/foget', 'd2w\IndexController@forget');
Route::get('/pass', 'd2w\IndexController@pass');