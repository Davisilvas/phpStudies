<?php

// Modelo de definição de uma classe. 
// quando a gente implementar uma classe a gente vai ter que seguir o padrão daquela interface. A PALAVRA RESERVADA É IMPLEMENTS

    interface Caracteristicas {

        public function falar();

        const CPF = '000.000.000-00';

    }

    class Humano implements Caracteristicas{
        
        public $idade;

        public function getCpf(){
            echo "O meu cpf é " . self::CPF . '<br>';
        }

        public function falar(){
            echo 'Olá mundo <br>';
        }

    }

    $davi = new Humano;

    $davi -> falar();
    $davi -> getCpf();
