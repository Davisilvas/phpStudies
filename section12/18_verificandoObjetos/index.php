<?php

// is_object() - Verifica se uma variável é um objeto

// get_class() -> Verifica a classe de um objeto

// method_exists() - Verifica se um método existe

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

    print_r(is_object($davi));
    echo '<br>';
    print_r(get_class($davi));
    echo '<br>';
    print_r(method_exists($davi, 'jogo'));
    echo '<br>';
    print_r(method_exists($davi, 'tome')); #como a resposta é false o 0 não aparece em tela.