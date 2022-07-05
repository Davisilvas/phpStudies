<?php 


    class Animal{

        public $nome;

        function pickAName($nome){ #função pra atribuir valor à propriedade
            $this->nome = $nome;
        }

        function bark(){
            return "roof roof";
        }

        function strongBark(){
            return strtoupper($this->bark()); #chamei um método com o this
        }
    };

    $doly = new Animal;

    echo "o nome do animal é: $doly->nome <br>";
    
    $doly->pickAName('Doly');

    echo "o nome do animal é: $doly->nome <br>";

    echo $doly->strongBark();
