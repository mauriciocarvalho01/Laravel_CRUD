<?php

use Illuminate\Support\Facades\Route;

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
//Produtos
Route::get('/produtos', 'ProductController@index');
Route::get('/produtos/adicionar', 'ProductController@create');
Route::post('/produtos/adicionar', 'ProductController@store');
Route::get('/produtos/{id}', 'ProductController@show');
Route::get('/produtos/{id}/alterar', 'ProductController@edit');
Route::put('/produtos/{id}', 'ProductController@update');
Route::delete('/produtos/{id}', 'ProductController@destroy');

//Marcas
Route::get('/marcas', 'MarkController@index');
Route::get('/marcas/adicionar', 'MarkController@create');
Route::get('/marcas/{id}', 'MarkController@show');
Route::post('/marcas/{id}/alterar', 'MarkController@update');
Route::post('/marcas/{id}/deletar', 'MarkController@destroy');

//Categorias
Route::get('/categorias', 'CategoryController@index');
Route::get('/categorias/adicionar', 'CategoryController@create');
Route::get('/categorias/{id}', 'CategoryController@show');
Route::post('/categorias/{id}/alterar', 'CategoryController@update');
Route::post('/categorias/{id}/deletar', 'CategoryController@destroy');
