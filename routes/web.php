<?php

use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProdutoController;
use Illuminate\Support\Facades\Route;

/*
Route::get('/', 'SitePublicoController@paginaPricipal');
Route::get('/vitrine', 'SitePublicoController@produtos');
Route::get('/info', 'SitePublicoController@informacoes');

Route::get('/cadastrar', 'ProdutoController@cadastroAbrir');
Route::POST('/cadastrar', 'ProdutoController@cadastroProcessar');

//cria as rotas na mao
Route::get('produtos/{id}/edit', 'ProdutoController@edit')->name('produto.edit');
Route::get('produtos/create', 'ProdutoController@create')->name('produto.create');
Route::get('produtos/{id}', 'ProdutoController@show')->name('produto.show');

Route::post('produtos', 'ProdutoController@cadastro')->name('produto.cadastro');
Route::put('produtos/{id}', 'ProdutoController@update')->name('produto.update');
Route::delete('produtos/{id}', 'ProdutoController@delete')->name('produto.delete');

*/

//Route::get('/index', 'ProductController@index')->name('produto.index');

//cria as rotas atraves do metodo resource
//Route::resource('produto', 'ProductController')->middleware('auth');
Route::resource('produto', 'ProductController');




Route::get('/login', function(){
    return view('login');
});





