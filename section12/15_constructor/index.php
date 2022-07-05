<?php 

// pelos construtores podemos inicializar objetos com valores de propriedades únicos para cada objeto.
// Passamos como argumento os valores das propriedades.

    class Human{
        public $nome;
        protected $cpf;
        private $senioridade;

        function __construct($nome, $cpf, $senioridade){
            $this->nome = $nome;
            $this->cpf = $cpf;
            $this->senioridade = $senioridade;
        }

        public function getSenioridade(){
            echo $this->senioridade . '<br>';
        }
    }

    class Funcionario extends Human{
        public function apresentacao(){
            echo "olá meu nome é $this->nome e meu cpf é $this->cpf e estou começando hoje na empresa <br>";
        }
    }

    $davi = new Human('Davi', '000.000.000-00', 'Júnior');
    $davi -> getSenioridade();

// O objeto herda o construtor do pai!
    $maria = new Funcionario('Maria', '111.111.111-11', 'Plena'); 
    $maria -> apresentacao();