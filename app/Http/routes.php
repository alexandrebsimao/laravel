<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/


Route::get('/',['as'=>'produtos.index', 'uses'=>'ProdutosController@index']);
Route::get('produtos',['as'=>'produtos.index', 'uses'=>'ProdutosController@index']);
Route::get('produtos/create',['as'=>'produtos.create', 'uses'=>'ProdutosController@create']);
Route::post('produtos/store',['as'=>'produtos.store', 'uses'=>'ProdutosController@store']);
Route::get('produtos/{id}/destroy',['as'=>'produtos.destroy', 'uses'=>'ProdutosController@destroy']);
Route::get('produtos/{id}/show',['as'=>'produtos.show', 'uses'=>'ProdutosController@show']);
Route::get('produtos/{id}/edit',['as'=>'produtos.edit', 'uses'=>'ProdutosController@edit']);
Route::put('produtos/{id}/update',['as'=>'produtos.update', 'uses'=>'ProdutosController@update']);