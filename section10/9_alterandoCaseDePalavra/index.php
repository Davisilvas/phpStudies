<?php

//diferente do outro que alterava todas os caracteres da string para maiúscula ou minúscula
//ucfirst -primeira letra da string em maiúscula;]
//ucwords - primeira letra de cada palavra em maiúscula;

$umastr = 'apenas uma string que vai servir de base para testes';

$funcao1 = ucfirst($umastr);
$funcao2 = ucwords($umastr);

echo "$funcao1 --colocando apenas a primeira letra em maiúsculo <br>";
echo "$funcao2 --colocando a primeira letra de cada palavra em maiúsculo <br>";

?>