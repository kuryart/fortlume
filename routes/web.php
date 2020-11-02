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

// === NAVIGATION ===
Route::get('/', 'NavigationController@home')->name('home');
Route::get('/produtos-view', 'NavigationController@produtos')->name('produtos.view');
Route::get('/obras-view', 'NavigationController@obras')->name('obras.view');

// === DASHBOARD ===
Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', 
    'NavigationController@dashboardProdutos')->name('dashboard');
Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard-obras', 
    'NavigationController@dashboardObras')->name('dashboard.obras');    

// === CATEGORIAS ===
// Index Admin
Route::middleware(['auth:sanctum', 'verified'])->get('/categorias-admin', 
    'CategoriaController@indexAdmin')->name('categorias-admin');
// Get by Index
Route::get('/categorias/{categoria}', 
    'CategoriaController@getByIndex')->name('categorias.getByIndex');
// Store    
Route::middleware(['auth:sanctum', 'verified'])->post('/categorias', 
    'CategoriaController@store')->name('categorias.store');
// Update
Route::middleware(['auth:sanctum', 'verified'])->put('/categorias/{categoria}', 
    'CategoriaController@update')->name('categorias.update');
// Delete
Route::middleware(['auth:sanctum', 'verified'])->delete('/categorias/{categoria}', 
    'CategoriaController@destroy')->name('categorias.destroy');

// === PRODUTOS ===
// Index Admin
Route::middleware(['auth:sanctum', 'verified'])->get('/produtos-admin', 
    'ProdutoController@indexAdmin')->name('produtos-admin');
// Store    
Route::middleware(['auth:sanctum', 'verified'])->post('/produtos', 
    'ProdutoController@store')->name('produtos.store');
// Update
Route::middleware(['auth:sanctum', 'verified'])->put('/produtos/{produto}', 
    'ProdutoController@update')->name('produtos.update');
// Delete
Route::middleware(['auth:sanctum', 'verified'])->delete('/produtos/{produto}', 
    'ProdutoController@destroy')->name('produtos.destroy');        

// === OBRAS ===
// Index Admin
Route::middleware(['auth:sanctum', 'verified'])->get('/obras-admin', 
    'ObraController@indexAdmin')->name('obras-admin');
// Store    
Route::middleware(['auth:sanctum', 'verified'])->post('/obras', 
    'ObraController@store')->name('obras.store');
// Update
Route::middleware(['auth:sanctum', 'verified'])->put('/obras/{obra}', 
    'ObraController@update')->name('obras.update');
// Delete
Route::middleware(['auth:sanctum', 'verified'])->delete('/obras/{obra}', 
    'ObraController@destroy')->name('obras.destroy');