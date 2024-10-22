<?php

$alunos = [
    "ana" => 7.5,
    "bruno" => 8.0,
    "carlos" => 6.5,
    "daniela" =>9.0,
    "eduardo" => 7.0
];

foreach($alunos as $nome => $nota){
    echo "$nome tirou nota $nota \n";
}
?>