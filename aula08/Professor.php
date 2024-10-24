<?php 

class Professor {

    private $nome;
    private $cpf;
    private $disciplina;
    private $identificacao;

    public function getNome(){
        return $this->nome;
    }

    public function getDisciplina(){
        return $this->disciplina;
    }

    public function setDisciplina($disciplinaNova){

        $this->disciplina = $disciplinaNova;
    }

    public function setCpf($cpfNovo){

        $this->cpf = $cpfNovo;
    }

}

?>