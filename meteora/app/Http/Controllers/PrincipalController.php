<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PrincipalController extends Controller
{
    public function principal (){

        $fornecedores=[ 
            'fornecedor 1' ,      
            'fornecedor 2',       
            'fornecedor 3',       
    ];
        
        return view ('index', compact('fornecedores'));
    }
}
