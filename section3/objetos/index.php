<?php

class Pessoa {

    #essa função é um método do objeto.
    function saudacao(){
        echo'olá pessoal, tudo bem?!';
    }

}

#aqui a gente iniciou o objeto e atribuiu a ele uma nova propriedade
$davi = new Pessoa();
$davi -> nome = 'Davi';

echo $davi ->nome;
echo '<br><br>';

$davi->saudacao();


?>