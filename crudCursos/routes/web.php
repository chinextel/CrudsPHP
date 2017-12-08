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


Route::group(['prefix' => 'index'], function(){
    Route::group(['prefix' => 'alumnos'], function(){
        Route::name('index_alumnos_path')->get('/','AlumnosController@index');
        Route::name('create_alumnos_path')->get('/create', 'AlumnosController@create');
        Route::name('store_alumnos_path')->post('/', 'AlumnosController@store');
        Route::name('edit_alumnos_path')->get('/edit/{id}','AlumnosController@edit');
        Route::name('update_alumnos_path')->put('/update','AlumnosController@update');
        Route::name('delete_alumnos_path')->delete('/delete/{id}','AlumnosController@delete');
    });
    Route::group(['prefix'=> 'profesores'], function(){
        Route::name('index_profesores_path')->get('/','ProfesoresController@index');
        Route::name('create_profesores_path')->get('/create','ProfesoresController@create');
        Route::name('store_profesores_path')->post('/','ProfesoresController@store');
        Route::name('edit_profesores_path')->get('/edit/{id}','ProfesoresController@edit');
        Route::name('update_profesores_path')->put('/update','ProfesoresController@update');
        Route::name('delete_profesores_path')->delete('/delete/{id}','ProfesoresController@delete');
    });

});
Route::name('index_path')->get('/index', 'IndexController@index');
/*
Route::name('index_alumnos_path')->get('/index/alumnos','AlumnosController@index');
Route::name('create_alumnos_path')->get('/index/alumnos/create', 'AlumnosController@create');
Route::name('store_alumnos_path')->post('/index/alumnos', 'AlumnosController@store');
Route::name('edit_alumnos_path')->get('/index/alumnos/edit/{id}','AlumnosController@edit');
Route::name('update_alumnos_path')->put('/index/alumnos/update','AlumnosController@update');
Route::name('delete_alumnos_path')->delete('/index/alumnos/delete/{id}','AlumnosController@delete');
*/
