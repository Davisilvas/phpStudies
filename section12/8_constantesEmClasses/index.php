<?php 

// constantes são parecidas com variáveis, mas seus valores não podem ser alterados -> public const Port = 3000;
// normalmente constante costuma ter o nome todo em maiúsculo 
// a forma de acessar a constante é através dos :: como foi feito na linha 21.

    class Frontinense {
        public const CEP = 26650000; 
        public $bairro;
        public $rua;

        function setBairro($b){
            return $this->bairro = $b;
        }

        function setRua($r){
            return $this->rua = $r;
        }

        function resido(){
            echo "oi, eu moro no $this->bairro na rua $this->rua e meu cep é " . $this::CEP . '<br>';
        }

        function mostrarCEP(){
            echo self::CEP . '<br>';
        }
    }

    $davi = new Frontinense;
    $davi->setBairro('Centro');
    $davi->setRua('Rua Vereador José Gramático');
    $davi->resido();
    $davi->mostrarCEP();