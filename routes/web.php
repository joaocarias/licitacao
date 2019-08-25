<?php

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/licitacao/index', 'LicitacaoController@index')->name('licitacao');
Route::get('/licitacao/atualize', 'LicitacaoController@atualize')->name('atualize');
Route::get('/licitacao/store', 'LicitacaoController@store')->name('store');
Route::get('/licitacao/licitacoes', 'LicitacaoController@licitacoes')->name('licitacoes');