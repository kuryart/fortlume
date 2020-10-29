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

// === HOME ===
Route::get('/', function () {
    return view('index.index');
});

// === DASHBOARD ===
Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

// === CATEGORIAS ===
Route::middleware(['auth:sanctum', 'verified'])->get('/categorias-admin', 
    'CategoriaController@index')->name('categorias-admin');

// Route::get('/produtos','ProdutoController@index')->name('produtos.index');
Route::get('/produtos/create','ProdutoController@create')->name('produtos.create');
Route::post('/produtos','ProdutoController@store')->name('produtos.store');
Route::get('/produtos/{produto}','ProdutoController@show')->name('produtos.show');
Route::get('/produtos/{produto}/edit','ProdutoController@edit')->name('produtos.edit');
Route::put('/produtos/{produto}','ProdutoController@update')->name('produtos.update');
Route::delete('/produtos/{produto}','ProdutoController@destroy')->name('produtos.destroy');


// === PRODUTOS ===
Route::middleware(['auth:sanctum', 'verified'])->get('/produtos-admin', 
    'ProdutoController@index')->name('produtos-admin');

// === OBRAS ===
Route::middleware(['auth:sanctum', 'verified'])->get('/obras-admin', 
    'ObraController@index')->name('obras-admin');    