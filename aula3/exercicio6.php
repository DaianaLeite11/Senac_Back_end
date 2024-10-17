<?php
$totalDeAulas= 10;
$totalDefaltas = 1;
$totalDeAulasAssistidas = ($totalDeAulas - $totalDefaltas);
$frequenciaAluno = (($totalDeAulasAssistidas/$totalDeAulas)*100);


if($frequenciaAluno >= 75){
    echo " apto a fazer a prova final" ;
}

else{
    echo " não está apto a fazer a prova final";
}
?>