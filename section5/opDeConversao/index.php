<?php

#força uma variável ser do tipo que a gente escolheu.
#normalmente usado para forçar uma string virar um número, tanto para int quanto para float.
#forçar que a variável vai dar o tipo de dado que a gente tá esperando.

$a = (int) '12';

echo $a . '<br>';
echo $a + 10  . '<br>';

if($a === 12){
    echo 'O adm confirmou, a é identico a 12!';
}

#a gente vai usar sempre entre parênteses, com o nome do tipo de dado dentro e do lado o dado a ser forçado.
?>