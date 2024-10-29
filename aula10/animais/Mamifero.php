<?php

class Mamifero extends Animal
{
    private $numeroDePatas;


    public function __construct($nome, $idade, $cor, $numeroDePatas )
    {
        parent::__construct ($nome, $idade, $cor);
        $this->numeroDePatas = $numeroDePatas;
    }
}
?>