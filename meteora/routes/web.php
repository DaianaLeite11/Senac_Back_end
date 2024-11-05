<?php

use Illuminate\Support\Facades\Route;

// get -> exibir, pegar alguma coisa
// :: -> conectividade
// "/" -> para acessar a página home
// function -> sozinho, sem nome é uma função anônima 

Route::get('/', function () {
    return view ('welcome');
});
Route::get('/sobre', function () {
    return view ('sobre');
});
Route::get('/contato', function () {
    return view ('contato');
});
