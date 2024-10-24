<?php

// function + nome da função, que vc escolhe, + ()
// o nome da função não pode ser uma palavra reservada da linguagem.
//palavra reservada da linguagem ex.: echo, readline,...

//função sem paramêtros
function apresentar($nome, $idade, $cidade){ // $nome é um parametro
    echo "olá, $nome boa noite! \nvocê tem $idade anos e mora em $cidade. \n \n";
}

// Chamando (invocando)
apresentar("Atena", 1500, "santorini"); // "Ana" é um argumento!
apresentar("Afrodite", 1650, "miconos");
apresentar("Zeus", 2050, "corfu");
apresentar("Apolo", 1800, "rodes");


?>