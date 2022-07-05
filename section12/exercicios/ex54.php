<?php

    class Pessoa{
        public $idade;
        public $nome;

        function andar($m){
            echo 'Agoda eu vou andar ' . $m . ' metros pra frente <br>';
        }
    }

// quando a gente vai usar uma propriedade de algum objeto a gente NÃO colocao $$$$$$ só no início no nome do objeto, como foi feito nas linhas abaixo;

    $davi = new Pessoa;
    $davi -> andar(70);
    $davi->nome = 'Davi';
    $davi->idade = 21;

    echo "olá meu nome é $davi->nome e eu tenho $davi->idade !!<br>";
    echo $davi -> idade . '<br>';
    echo $davi -> nome . '<br>';