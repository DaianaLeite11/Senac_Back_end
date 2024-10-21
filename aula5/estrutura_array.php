<?php 

/* array-> é uma coleção ordenada de elementos.
Cada elemento é separado por vírgula.
Cada elemento pode ser acessado pelo índice.
Arrays são usados para armazenar listas de itens, como nomes de alunos notas.


$alunos=["ana", "bruno", "carlos","daniela"];
echo "primeiro aluno:  " .$alunos[0];
*/

$notasDeMatematica = [
    "ana" => 8.5,
    "bruno" => 7.5,
    "carlos" => 9.0,
    "daniela" =>6.0
];
echo "nota do bruno: " . $notasDeMatematica["bruno"];
 ?>