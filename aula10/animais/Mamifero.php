<?php

class Mamifero extends Animal
{
    protected $numeroDePatas;


    public function __construct($nome, $idade, $cor, $numeroDePatas )
    {
        //uso para pegar os atributos do "pai"
        parent::__construct ($nome, $idade, $cor);
        $this->numeroDePatas = $numeroDePatas;
    }
}
?>