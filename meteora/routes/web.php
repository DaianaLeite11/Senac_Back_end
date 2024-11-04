<?php

use Illuminate\Support\Facades\Route;

// get -> exibir, pegar alguma coisa
// :: -> conectividade
// "/" -> para acessar a página home

Route::get('/', function () {
    return view('welcome');
});
