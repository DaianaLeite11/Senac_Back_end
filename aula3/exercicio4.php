<?php

$notaAluno1 = 5;
$notaAluno2 = 4;
$notaAluno3 = 7;

$soma = ($notaAluno1 + $notaAluno2 + $notaAluno3);
$media = ($soma / 3);

// echo $media;

 if($media >= 7){
     echo "aprovado ";
 }
 elseif($media >= 5) {

     echo "recuperação";
 }
 else{
     echo "reprovado";
 }
?>