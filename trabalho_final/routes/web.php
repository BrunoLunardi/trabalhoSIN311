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

//quando digitar a url balanco será chamado o arquivo BalancoController localizado em app\Http\Controllers
Route::resource('balanco', 'BalancoController');


Route::any('/create', 'BalancoController@show');

//acessar a url fluxo de  caixa caira neste controller
Route::resource('fluxcaixa', 'FluxoController');

//acessar a url fluxo da venda caira neste controller
Route::resource('venda', 'VendaController');

//acessar a url fluxo da venda caira neste controller
Route::resource('compra', 'CompraController');