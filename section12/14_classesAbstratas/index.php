<?php

// não podem ser instanciadas, ou seja não vamos ter objetos a partir dela. Podemos ter métodos abstrados que devem ser implantados obrigatóriamente se uma classe herdar a abstrata. 

// A palavra reservada tanto para classes como para métodos é abstract. -> abstract class ClasseAbstrata{}


    abstract class Rotina{

        public function drinkCoffee($ml){
            echo "$this->nome colocou $ml ml na caneca e vai beber isso tudo de café <br>";
        }

        public static function teste(){
            echo 'teste pegando função estática de classe abstrata <br>';
        }

        abstract public function auau(); #essa função vai ter que ser declarada em TODOS que herdarem essa classe abstrata
    }

    class Humano extends Rotina{
        public $nome;

        public function setNome($n){
            return $this->nome = $n;
        }

        public function auau(){
            echo 'Au au <br>';
        }
    }

    $davi = new Humano;

    $davi -> setNome('Davi');
    $davi -> drinkCoffee(200);

// UMA FORMA DE USAR O MÉTODO DIRETO JÁ QUE NÃO PODE INSTANCIAR A CLASSE.

    Rotina::teste();

