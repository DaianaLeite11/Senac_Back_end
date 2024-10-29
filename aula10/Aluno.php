<?php

// a classe aluno tem acesso a todos atributos da clase pessoa

class Aluno extends Pessoa
{

    private $notas = [];
    private $rg;

    public function __construct($nome, $dataDeNascimento, $disciplina, $rg){
        parent::__construct();
        $this->rg = $rg;
    }
    
}
?>