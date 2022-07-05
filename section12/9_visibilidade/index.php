<?php 

// 3 formatos de visibiliade PUBLIC, PROTECTED E PRIVATE

// PUBLIC -É O DEFAULT - A propriedade ou método pode ser acessada de qualquer forma

// PROTECTED - A propriedade ou método pode ser acessada apenas pela classe de origem ou as que recebem a mesma herança;

// PRIVATE - A propriedade ou método pode ser acessada apenas pela classe que foi criada. 

    class Car{
        public $rodas = 4;
        private $vidro = 'Sem Película';
        protected $portas = 4;

        // public function changeVidro($pelicula){
        //     $this->vidro = $pelicula;
        // }

        public function getVidro(){
            return $this->vidro;
        }

        public function getPortas(){
            return 'o carro tem: ' . $this->portas . ' portas';
        }

    }

    class Mecanico {
        public function chageTires($obj){
            $obj->rodas = 10; 
        }

        public function mexerNoVidro($carro, $vidro){
            $carro->vidro = $vidro;
        }
    }

    $siena = new Car;
    echo $siena->rodas . '<br>';

    $gPec = new Mecanico; 
    $gPec -> chageTires($siena); #alterando a propriedade pública de um objeto, através de outro objeto. 
    echo $siena->rodas . '<br>';

    // $gPec->mexerNoVidro($siena, 'G20'); isso aqui vai dar erro pois somente uma classe filha pode acessar a propriedade private de uma classe.

    // echo $siena->vidro . '<br>'; NEM PRA ALTERAR DÁ POIS ELA É PRIVADA POR OUTRA CLASSE, E NEM ACESSAR ESSA PROPRIEDADE VIA OBJETO A GENTE CONSEGUE, TEM QUE SER VIA CLASSE.   
    // $siena -> changeVidro('g10');
    // echo $siena->vidro . '<br>';

    echo $siena -> getVidro() . '<br>'; #consegue acessar pra ver mas de forma alguma consegue acessar pra alterar pois ela é privada.

// pra alterar uma propriedade privada, só quando a gente instanciar a classe com um constructor 

// A MESMA COISA ACONTECE COM O PROTECTED!

    echo $siena -> getPortas() . '<br>';
    echo $siena->portas . '<br>';
