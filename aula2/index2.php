<?php
/*
para a aluna ser aprovada, precisa que a nota final seja a partir de 60 e que a frequencia seja a partir de 
75%.
*/
$notaAlunafinal = 70;
$frequenciaAluna = 85;

if($notaAlunafinal >=60 && $frequenciaAluna >=75){
    echo "aluna aprovada";
}
else {
    echo "reprovada ";
}

?>