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

//pregunta
Route::get('/', 'PreguntaController@index');
Route::get('/viewaddpregunta', 'PreguntaController@viewaddpregunta');
Route::post('/addpregunta', 'PreguntaController@store');
Route::get('/code/{id}', 'PreguntaController@viewPregunta')->name("code");
Route::get('search', 'PreguntaController@preguntaByDesc');
Route::get('/categoria/{lenguaje}', 'PreguntaController@preguntaByLenguaje');
Route::get('/like/{id}', 'PreguntaController@addLike');

//respuesta
Route::post('/addRespuesta', 'RespuestaController@addRespuesta');
Route::get('/destacar/{id}', 'RespuestaController@destacar');
Route::get('/delRespuesta/{idpregunta}/{idrespuesta}', 'RespuestaController@delRespuesta');

//user

Route::get('/perfil', 'UserController@showPerfil')->name('perfil');
Route::post('changeImg', 'UserController@changeImg');
Route::post('changePasword', 'UserController@changePasword');



Auth::routes();


