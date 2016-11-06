<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    return view('welcome');

});


Auth::routes();

Route::get('/encuesta', 'EncuestaController@index');
Route::post('/encuesta/store', 'EncuestaController@store');


Route::get('/admin/encuesta', 'Admin\EncuestaController@index');
Route::get('/admin/encuesta/{id}/edit', 'Admin\EncuestaController@edit');
Route::post('/admin/encuesta/update', 'Admin\EncuestaController@update');
Route::get('/admin/encuesta/create', 'Admin\EncuestaController@create');
Route::post('/admin/encuesta/store', 'Admin\EncuestaController@store');
Route::delete('/admin/encuesta/{id}', 'Admin\EncuestaController@destroy')->name('admin.encuesta.destroy');


Route::get('/admin/pregunta/{encuesta}', 'Admin\PreguntaController@index')->name('admin.pregunta.index');
Route::get('/admin/pregunta/{id}/edit', 'Admin\PreguntaController@edit');
Route::post('/admin/pregunta/update', 'Admin\PreguntaController@update');
Route::get('/admin/pregunta/{encuesta}/create', 'Admin\PreguntaController@create');
Route::post('/admin/pregunta/store', 'Admin\PreguntaController@store');
Route::delete('/admin/pregunta/{id}', 'Admin\PreguntaController@destroy')->name('admin.pregunta.destroy');


Route::get('/admin/alternativa/{pregunta}', 'Admin\AlternativaController@index')->name('admin.alternativa.index');
Route::get('/admin/alternativa/{id}/edit', 'Admin\AlternativaController@edit');
Route::post('/admin/alternativa/update', 'Admin\AlternativaController@update');
Route::get('/admin/alternativa/{pregunta}/create', 'Admin\AlternativaController@create');
Route::post('/admin/alternativa/store', 'Admin\AlternativaController@store');
Route::delete('/admin/alternativa/{id}', 'Admin\AlternativaController@destroy')->name('admin.alternativa.destroy');

