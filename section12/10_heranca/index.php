<?php 

    class Pessoa{
        //só podem ser manipuladas dentro de classes herdeiras (filhas)
        protected $cpf;

        protected $time = 'Vasco Da Gama';

        // só pode ser manipulado aqui dentro da classe pai
        private $pratoFav = 'Strgonoff'; 
    
        // pega o cpf que foi setado no programador
        public function getCpf(){
           return 'O cpf desta pessoa é: ' . $this->cpf . '<br>';
        }

        // pega o prato favorito que é private, só pode ser pego aqui
        public function getPratoFav(){
            return $this->pratoFav . '<br>';
        }

        // função privada gritar, só pode ser manipulada aqui
        private function gritar(){
            echo 'ESTOU GRITANDO <BR>';
        }

        // função protegida susurro que só pode ser manipulada por herdeiros
        protected function susurro(){
            echo 'estou susurrando <BR>';
        }

        // acessando função privada gritar
        public function acssesGritar(){
            $this->gritar();
        }
    }

    class Programador extends Pessoa{
        protected $senioridade; 

        public $area; // setar se é back front ou full.

        // setando o cpf da classe pai
        public function setCpf($c){
            $this->cpf = $c;
        }

        #PEGANDO UM DADO PROTECTED DA CLASSE PAI!!
        public function getTime(){ 
            return $this->time . '<br>';
        }

        // acessando função protegeida da classe pai
        public function acssesSusurro(){
            $this->susurro();
        }

        // public function getPratoFav(){
        //     return $this->pratoFav;
        // }
    }

    $davi = new Programador;

    $davi->setCpf('179.647.357-05');
    echo $davi->getCpf();

    echo $davi->getTime();
    echo $davi->getPratoFav();

    echo $davi->acssesSusurro();
    echo $davi->acssesGritar();
