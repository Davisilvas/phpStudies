<?php 

// class_exists() verifica se uma classe existe

// get_class_methods() Verifica os métodos de uma classe

// get_class_vars() mapeia as propriedades de uma classe.

    class Human{
        public $nome;
        public $idade;
        protected $cpf;
        private $endereco;

        function __construct($nome, $idade, $cpf, $endereco){
            $this->nome = $nome;
            $this-> idade = $idade;
            $this-> cpf = $cpf;
            $this-> endereco = $endereco;
        }

        public function getDados(){
            echo "Nome: $this->nome,
                  Idade: $this->idade
                  CPF: $this->cpf,
                  Endereço: $this->endereco <br>";
        }

        protected function blabla(){
            echo 'Bla Bla Bla <br>';
        }

        private function jogo(){
            echo 'Jogo tal é muito bom <br>';
        }
    }

    $davi = new Human('Davi', 21, '000.000.000-00', 'Rua tal, bairro tal, cidade tal');
    
    $davi-> getDados();

    if(class_exists("Human")){
        echo 'A classe Human existe <br>';
    }else{
        echo 'A classe Human não existe <br>';
    }

    print_r(get_class_vars('Human')); // só vai retornar o que é public! protected e private não são mostrados.
    echo '<br>';
    print_r(get_class_methods('Human'));// só vai retornar o que é public! protected e private não são mostrados.