<?php 

// Para declarar propriedades vamos basicamente criar uma variável dentro de uma class. Porém precisamos definir sua privacidade, como por exemplo public. public $idade = 21

    class Progrmador{
        public $tipo = 'Back-end';
        public $tec = 'PHP';
// A variável pode ser inicializada sem valor atribuído. 

        // function speak($nome){
        //     echo "olá meu nome é $nome, sou dev $tipo e gosto muito da linguagem $tec <br>";
        //}
    }

    $davi = new Progrmador;

    echo $davi -> tipo . '<br>';
    echo $davi -> tec . '<br>';

    // mudando o valor de uma propriedade de uma classe.
    $davi -> tec = "REACT";

    echo $davi -> tec . '<br>';
