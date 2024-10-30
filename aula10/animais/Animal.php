<?php

class Animal {
    
// proteceted apenas os herdeiros conseguem ver

    protected $nome;
    protected $idade;
    protected $cor;

    public function comunicar(){
        echo "Fazendo barulho \n";
    }

    public function __construct($nome, $idade, $cor )
    {
        $this->nome = $nome;
        $this->idade = $idade;
        $this->cor = $cor;
    }
}
?>