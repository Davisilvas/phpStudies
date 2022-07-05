<?php
     //" . $this->getIdade() . "<br>"
    
     class Human{
        public $nome;

        protected $idade = 21;

        private $profissao = 'Dev';

        public function falar(){
            echo "Olá meu nome é $this->nome, minha idade é: $this->idade anos e eu sou $this->profissao <br>";
        }

        public function getProfissao(){
            echo $this -> profissao;
        }

        public function getName(){
            echo $this -> nome;
        }
        
    }

    class Programador extends Human{
       
       public function setName($n){
        $this->nome = $n;
       }

        public function getIdade(){
            echo $this -> idade;
        }
    }


    $davi = new Programador;
    
    $davi -> setName('Davi');
    $davi -> falar();
    $davi -> getIdade();
    echo '<br>';
    $davi -> getProfissao();
    echo '<br>';
    $davi -> getName();
