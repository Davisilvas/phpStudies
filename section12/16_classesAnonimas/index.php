<?php 


// As classes anônimas são ciradas em uma variável e não possuem nome, e funcionam normalmente como uma classe qualquer. sintaxe -> $anonima = new class(){};

    $pessoa = new class(){
        public $nome = 'Davi';
        public $idade = 21;
        public $time = 'Vasco da Gama';

        public function apresentacao(){
            echo "Olá meu nome é $this->nome eu tenho $this->idade e torço pro gigante $this->time <br>";
        }
    };

    $pessoa -> apresentacao(); 

// Não da pra trabalhar com herança 