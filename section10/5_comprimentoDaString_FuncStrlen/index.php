<?php

// função strlen que recebe a string como parâmetro e retorna o tamanho da string. Ou seja ela retorna quantos caracteres foram usados numa string. 
// pode ser usado pra verificação do tamanho de senhas e nicks eu acho.  

$a = '1 2 3';# O espaço conta como caractere.
$nomeCompleto = 'Davi Silva Santos';

echo strlen($a);
echo '<br>';
echo strlen($nomeCompleto);

$str1 = strlen($a);
$str2 = strlen($nomeCompleto);

if($str2 > $str1){
    echo '<br> O numero de caracteres na variável str2 é maior que na str1!';
}

?>