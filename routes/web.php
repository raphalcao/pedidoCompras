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


Route::get('/', function () {
    return view('welcome');
});
*/

Route::get('/', 'ProdutosController@index')->name('indexproduto');
Route::get('/produtos/criar', 'ProdutosController@create')->name('createproduto');
Route::post('/produtos/criar', 'ProdutosController@store')->name('storeproduto');
Route::get('/produtos/alterar/{id}', 'ProdutosController@editar')->name('editarproduto');
Route::post('/produtos/alterar/{id}', 'ProdutosController@update')->name('updateproduto');
Route::delete('/produtos/{id}', 'ProdutosController@destroy')->name('destroyproduto');



Route::get('/clientes', 'ClientesController@index')->name('index');
Route::get('/clientes/criar', 'ClientesController@create')->name('create');
Route::post('/clientes/criar', 'ClientesController@store')->name('store');
Route::get('/clientes/alterar/{id}', 'ClientesController@editar')->name('editar');
Route::post('/clientes/alterar/{id}', 'ClientesController@update')->name('update');
Route::delete('/clientes/{id}', 'ClientesController@destroy')->name('destroy');

Route::get('/produtopedidos', 'PedidoController@index')->name('indexprodutopedidos');
Route::get('/produtopedidos/criar', 'PedidoController@create')->name('pedidocontrollercreate');
Route::post('/produtopedidos/criar', 'PedidoController@store')->name('pedidocontrollerstore');
Route::delete('/produtopedidos/{id}', 'PedidoController@destroy')->name('pedidocontrollerdestroy');



Route::get('/pedidos', 'PedidosProdutosController@index')->name('pedidosindex');
Route::get('/pedidos/{id}', 'PedidosProdutosController@pedidocreate')->name('pedidocreate');
Route::post('/pedidos/{id}', 'PedidosProdutosController@store')->name('confirmarpedidosprodutosstore');
Route::delete('/pedidos/{id}', 'PedidosProdutosController@destroy')->name('pedidosprodutosdestroy');
