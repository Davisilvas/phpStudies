<?php

// as traits permitem o reuso do código sem hierarquia de classes, ou seja, sem herança.

// Podemos assim utilizar os métodos da classe que foi feita a trait. Usamos a palavra reservada use.

// usado pra evitar heranças demais. 

// ao ínves de criar com o nome class a gente cria com o nome trait.

// trait também tem propriedades 

    trait Objeto{
        public function teste(){
            echo 'testando trait de obj <br>';
        }
    }

    trait N2{
        public function testando(){
            echo 'testando func testando da trait N2 pra ver que um obj pode ter mais de uma trait nele <br>';
        }
    }

    class Central {
        use Objeto;
        use N2;
    }

    $brasil = new Central;

    $brasil -> teste();
    $brasil -> testando();