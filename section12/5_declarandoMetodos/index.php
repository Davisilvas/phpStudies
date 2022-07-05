<?php 

// mesma sintaxe que a function porém dentro da class. .
// sintaxe pra chamar um método $davi -> greetings();

    class Programador{

        function greetings(){
            echo 'Olá tudo bem? <br>';
        }

        function somar($a, $b){
            echo $a + $b . '<br>';
        }

    }

    $davi = new Programador;
    $maria = new Programador;

    $davi -> greetings();
    $davi -> somar(5, 16);

    $maria -> somar(4, 32);
    

 