<?php 

//podemos remover os espaços em branco de uma string com funções de php
// esses espaços em branco normalmente vem dos formulários preenchidos pelos usuários. é uma forma de tratar esses dados. 

header("content-type: text/plain");
$str1 = "         Davi   ";
$str2 = "        Davi2";
$str3 = "Davi3            ";

echo "Essa é a string 1 sem tratamento {$str1}.\n";
echo "Essa é a string 2 sem tratamento {$str2}.\n";
echo "Essa é a string 3 sem tratamento {$str3}.\n";

//abaixo limpando a string inteira.
$str1Limpa = trim($str1);
echo '.' . $str1Limpa . ".\n";

//abaixo limpando só o início (lado esquerdo);
$str2Limpa = ltrim($str2);
echo '.' . $str2Limpa . ".\n";

//abaixo limpando só o final (lado direito);
$str3Limpa = rtrim($str3);
echo '.' . $str3Limpa . ".\n";


?>