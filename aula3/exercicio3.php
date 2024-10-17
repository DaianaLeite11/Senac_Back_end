<?php

$turnoAluno = "notur";

if($turnoAluno == "matutino"){
    echo "M";
    echo "\nBom dia!";
}
 elseif($turnoAluno == "vespertino") {

     echo "V";
     echo "\nBoa tarde!";
 }
 elseif($turnoAluno == "noturno") {

     echo "N";
     echo "\nBoa noite!";
 }
else{
    echo "Turno inválido.";
    
}
?>