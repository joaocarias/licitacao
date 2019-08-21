<?php

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/licitacao/index', 'LicitacaoController@index')->name('licitacao');
Route::get('/licitacao/atualize', 'LicitacaoController@atualize')->name('atualize');
Route::get('/licitacao/atualizar', 'LicitacaoController@atualizarBaseDeDado')->name('atualizar');