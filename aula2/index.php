<?php
/*tipos de dados em variáveis */

$nome;
$nome = "maria"; // string
$idade = 18; // number, inteiro
$altura= 1.93; // number, decimal
$matriculado = true; // boolean
$materiais = array("matemática", " história", "física"); // array

echo "\n nome: " .$nome;  // o . concatena
echo "\n idade: " .$idade;  // shift + alt + seta para baixo -> copia e cola a linha 
echo "\n altura (m): " .$altura;  
echo "\n matriculado ? " .($matriculado ? "sim" : "não");  
echo "\n materias: " . implode(" , ",$materiais);  

// Estruturas condicionas - if, else if, else
// se a nota for a partir de 6, ele passou de série

$notaFinal = 5;
if ($notaFinal>=6){
    echo " aluno aprovado";  
}
else if ($notaFinal<6){
    echo "aluno reprovado";
}
else{
    echo "nota inválida";
}


?>