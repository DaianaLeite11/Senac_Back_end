<?php

class Pessoa {

    protected $nome;
    protected $dataDeNascimento;
    protected $disciplina;
    protected $cpf;
    protected $identificacao;
    
    public function __construct($nome, $dataDeNascimento, $disciplina, $cpf, $identificacao) {
       
        $this->nome = $nome;
        $this->dataDeNascimento = $dataDeNascimento;
        $this->disciplina = $disciplina;
        $this->cpf = $cpf;
        $this->identificacao = $identificacao;

    }

    public function exibirInfo(){
        echo "Nome: $this->nome \n";
        echo "CPF: $this->cpf \n";
        
    }

}
?>