<?php


use Illuminate\Support\Facades\Route;

use app\Http\Controllers\ProdutoController;

Route::get('/produtos/create',[ProdutoController::class,'create'])->name('produtos.create');
Route::get('/',[ProdutoController::class,'index'])->name('produtos.index');
Route::get('/produtos',[ProdutoController::class,'store'])->name('produtos.store');