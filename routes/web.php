<?php

use Illuminate\Support\Facades\Route;

Route::get('/', 'SitePublicoController@paginaPricipal');
Route::get('/vitrine', 'SitePublicoController@produtos');
Route::get('/info', 'SitePublicoController@informacoes');

Route::get('/cadastrar', 'ProdutoController@cadastroAbrir');
Route::POST('/cadastrar', 'ProdutoController@cadastroProcessar');





