<?php

require_once 'Animal.php';
require_once 'Mamifero.php';

class Main {

    public static function run(){
        // instanciando um objeto da classe animal
        $animal1= new Animal("Leão", 5, "amarelo");
        $animal2= new Animal("Caramelo", 5, "Caramelo");
        $animal1->comunicar();

        $mamifero1= new Mamifero("Baleia", 103, "azul", 0);
        $mamifero2= new Mamifero("Gato", 1, "preto", 4);
        $mamifero2->comunicar();
    }
    
}
?>