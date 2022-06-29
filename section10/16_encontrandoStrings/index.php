<?php

$str = 'estamos testando o método strpos, com o strpos podemos encontrar strings';

$finder = strpos($str, 'strpos');

echo $finder . '<br>';

// agora dando false que vai imprimir nada


$finder2 = strpos($str, 'vasco');

echo $finder2 . '<br>';
//verificando erro
if($finder2 === false){
    echo 'word not found <br>';
}

