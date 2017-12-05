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

Route::name('store_post_path')->post('/principal', 'PrincipalController@store');

Route::name('create_post_path')->get('/principal/create', 'PrincipalController@create');

Route::name('edit_post_path')->get('/principal/edit/{post}','PrincipalController@edit');

Route::name('update_post_path')->put('/principal/update','PrincipalController@update');

Route::name('delete_post_path')->delete('/principal/delete/{post}','PrincipalController@delete');


