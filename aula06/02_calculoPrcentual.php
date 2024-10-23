<?php

$numeroAlunos=5;
$frequencia =[];
$totalDeaulas = readline("Digite o total de aulas: \n");

for($i=1; $i<=$numeroAlunos; $i++) {
    $nome = readline("Digite o nome do aluno $i: \n");
    $aulasAluno = readline("Digite a quantidade de aulas frequentadas: ");
    

    $freq= ($aulasAluno / $totalDeaulas) *100 ;

    $frequencia [$nome] = $freq;

}

echo "frequencia escolar: \n";

foreach ($frequencia as $nome => $freq) {
    echo "Aluno(a) $nome: $freq % \n";
}
?>
