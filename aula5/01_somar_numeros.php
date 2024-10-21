<?php

/* Escreva um programa que peça para o usuário digitar nímeros.
some todos os números inseridos 
pare a execução do while quando o usuário digitar zero
Exiba o total da soma
*/

$soma=0;
while(true){
    $numero = readline(prompt: "Digite um número ( 0 para sair): "); // readline guarda o que o usuário digitar

    if($numero == 0){
        break;
    }
    $soma = $soma + $numero;
}
echo "A soma total é: " .$soma ."\n";
?>