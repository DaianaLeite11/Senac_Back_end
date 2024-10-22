<?php

$numeroAlunos=3;
$boletim =[];

for($i=1; $i<=$numeroAlunos; $i++) {
    $nome = readline("Digite o nome do aluno $i: \n");
    $nota1 = readline("Digite a primeira nota : ");
    $nota2 = readline("Digite a segunda nota : ");

    $media= ($nota1 + $nota2) /2 ;

    $boletim [$nome] = $media;

}

echo "boletim escolar: \n";

foreach ($boletim as $nome => $media) {
    echo "$nome - media: $media \n";
}
?>