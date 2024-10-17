<?php 

$idadeAluno= 19;

if($idadeAluno <=5 ){
    echo " Educação Infantil";
}
elseif($idadeAluno <= 10) {

    echo " Ensino fundamental I";
}
elseif($idadeAluno <= 14) {

    echo " Ensino fundamental II";
}
elseif($idadeAluno <= 17) {

    echo " Ensino Médio";
}
else{
    echo "EJA (educação de jovens e adultos)";
}

?>