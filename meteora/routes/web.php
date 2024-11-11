<?php

use App\Http\Controllers\ProdutosController;
use Illuminate\Support\Facades\Route;

// get -> exibir, pegar alguma coisa
// :: -> conectividade
// "/" -> para acessar a página home
// function -> sozinho, sem nome é uma função anônima 

// Route::get('/', function () {
//     return view ('welcome');
// });
// Route::get('/sobre', function () {
//     return view ('sobre');
// });
// Route::get('/contato', function () {
//     return view ('contato');
// });

// Route::get('/produtos', function () {
//          return view ('produtos');
//      });

Route::get('/',[\App\Http\Controllers\PrincipalController::class,'principal']);
Route::get('/sobre',[\App\Http\Controllers\SobreController::class,'sobre']);
Route::get('/contato',[\App\Http\Controllers\ContatoController::class,'contato']);
Route::get('/produtos','\App\Http\Controllers\ProdutosController@mostrarProdutos');
