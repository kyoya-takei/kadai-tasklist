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

//Route::get('/', 'TasksController@index');
//アクセスしたらwelcomeページに
Route::get('/', function () {
    return view('welcome');
});

Route::resource('tasks', 'TasksController');

//ユーザ登録
Route::get('signup', 'Auth\RegisterController@showRegistrationForm')->name('signup.get'); //サインアップ画面
Route::post('signup', 'Auth\RegisterController@register')->name('signup.post'); //サインアップ処理

//ログイン機能
Route::get('login', 'Auth\LoginController@showLoginForm')->name('login.get');
Route::post('login', 'Auth\LoginController@login')->name('login.post');
Route::get('logout', 'Auth\LoginController@logout')->name('logout.get');