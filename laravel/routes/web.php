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

Route::get('/cliente/lista', 'ClienteController@listar');
Route::get('/cliente/cadastro', 'ClienteController@cadastrar');
Route::get('/cliente/edicao/{id}', 'ClienteController@editar')->where('id', '[0-9]');