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
    return view('welcome');
});

Route::name('post_path')->get('/principal', 'PrincipalController@index');
Route::name('create_post_oath')->get('/principal/create', 'PrincipalController@create');
Route::name('create_post_oath')->get('/principal/create', 'PrincipalController@create');