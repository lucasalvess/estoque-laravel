<?php

Route::get('/ ','ProdutoController@lista');

Route::get('/produtos/mostra/{id}','ProdutoController@mostra')->where('id','[0-9]+');

Route::get('/produtos/novo','ProdutoController@novo');
Route::post('/produtos/adiciona','ProdutoController@adiciona');
Route::get('/produtos/remove/{id}','ProdutoController@remove')->where('id','[0-9]+');
Route::get('/login','LoginController@form');
Route::post('/login','LoginController@login');
Route::get('/produtos/edita/{id}','ProdutoController@edita');
Route::post('/produtos/salva','ProdutoController@salva');