<?php 
class Aluno {
    // atributos -> características
    // por padrao, todo atributo de uma classe é privado (private)

   
    private $nome;
    private $idade;
    private $matriculado = true;
    private $notas= [];

// get informa o valor de um atributo provado
// ao usar get começo com maíscula o nome da vari´vel
    public function getNome(){
        return $this->nome;
    }

    // set permite alterar o valor atribuído a variável
    // ao usar set começo com maíscula o nome da vari´vel
    public function setNome($nomeNovo){

        $this->nome = $nomeNovo;
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

}

?>