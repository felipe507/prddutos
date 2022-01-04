<?php

use App\Http\Controllers\ControladorCategoria;
use App\Http\Controllers\ControladorProduto;
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

Route::get('/', function () {
    return view('index');
});

Route::get('categorias/editar/{id}', [ControladorCategoria::class, 'edit']);
Route::get('categorias/apagar/{id}', [ControladorCategoria::class, 'destroy']);
Route::get('categorias/novo', [ControladorCategoria::class, 'create']);
Route::post('categorias', [ControladorCategoria::class, 'store']);
Route::get('categorias/', [ControladorCategoria::class, 'indexView']);
Route::post('categorias/{id}', [ControladorCategoria::class, 'update']);
Route::get('produtos/editar/{id}', [ControladorProduto::class, 'edit']);
Route::get('produtos/apagar/{id}', [ControladorProduto::class, 'destroy']);
Route::get('produtos/novo', [ControladorProduto::class, 'create']);
Route::post('produtos', [ControladorProduto::class, 'store']);
Route::get('produtos/', [ControladorProduto::class, 'indexView']);
Route::post('produtos/{id}', [ControladorProduto::class, 'update']);


