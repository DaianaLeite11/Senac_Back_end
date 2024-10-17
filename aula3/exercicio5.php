<?php

$notaAluno = 9;
$mensalidade = 1000;
$Desconto1 = ($mensalidade * 0.8);
$Desconto2 = ($mensalidade * 0.9);

if($notaAluno >= 9){
    echo " A mensalidade é: " . $Desconto1;
}
elseif($notaAluno >= 7) {

    echo " A mensalidade é: " . $Desconto2;
}
else{
    echo " A mensalidade é: " . $mensalidade;
}

?>