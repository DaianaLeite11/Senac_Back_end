<?php 
class Aluno {
    // atributos -> características
    // por padrao, todo atributo de uma classe é privado (private)

   
    private $nome;
    private $idade;
    private $matriculado = true;
    private $notas= [];


// não preciso colocar a matricula pq já está true
// não coloco as notas pq vão ser inseridas depois
// duplo clique, ctrl +d -> seleciona todas as ocorrencias seguintes com o mesmo nome  
// uso o construsct pq facilita
// uso get para alterar os dados anteriores
    public function __construct($nome, $idade){
    
        $this->nome = $nome;
        $this->idade = $idade;

    }

// get informa o valor de um atributo provado
// ao usar get começo com maíscula o nome da vari´vel
    public function getNome(){
        return $this->nome;
    }
    public function getIdade(){
        return $this->idade;
    }

    // set permite alterar o valor atribuído a variável
    // ao usar set começo com maíscula o nome da vari´vel
    public function setNome($nomeNovo){

        $this->nome = $nomeNovo;
    }
    public function setIdade($idadeNova){

        $this->idade = $idadeNova;
    }


     // métodos -> açoes
     // por padrao, todo metodo de uma classe é publico (public)
     // uso this pq é um aluno específico
    // ao usar $this não precisa colocar $ na variável 
     public function situacao(){
        if($this->matriculado == true){
            
            $this->matriculado = false; // quando o aluno ficar inativo

        } else if($this->matriculado == false){

            $this->matriculado = true;

        }
    
      
     }
     public function exibirDados(){
        echo "Nome: $this->nome \n";
        echo "Idade: $this->idade \n";
        echo "Situação: $this->matriculado \n";
    }

}
 // objeto 
 // tem todos os atributos da classe Aluno
 // assim consigo colocar os valores dos atributos
 // uso o set para colocar o valor
// não usa echo para imprimir as info de objeto -> uso var_dump 


$aluno1 = new Aluno("Ana", 15);
// $aluno1->setNome("Ana");
// $aluno1->setIdade(10);
// $aluno1->setIdade(15);

$aluno2 = new Aluno("Carlos", 17);
// $aluno2->setNome("Carlos");
// $aluno2->setIdade();

$aluno3 = new Aluno("Lucas", 16);
// $aluno3->setNome("Lucas");
 $aluno3->setIdade(15);

//var_dump($aluno3);


//método tostring

$aluno1->exibirDados();
$aluno2->exibirDados();
$aluno3->exibirDados();




?>