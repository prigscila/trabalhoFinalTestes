<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});

Route::get('/alunos', 'AlunosController@index');
Route::get('/alunos/novo', 'AlunosController@create');
Route::get('/alunos/apagar/{id}', 'AlunosController@destroy');
Route::get('/alunos/editar/{id}', 'AlunosController@edit');
Route::get('/alunos/ver/{id}', 'AlunosController@show');
Route::post('/alunos', 'AlunosController@store');
Route::post('/alunos/{id}', 'AlunosController@update');

Route::get('/notas', 'NotasController@index');
Route::get('/notas/novo', 'NotasController@create');
Route::get('/notas/apagar/{id}', 'NotasController@destroy');
Route::get('/notas/editar/{id}', 'NotasController@edit');
Route::post('/notas', 'NotasController@store');
Route::post('/notas/{id}', 'NotasController@update');
