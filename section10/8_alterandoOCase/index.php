<?php

//podemos alterar as strings para maiúsculas ou minúsculas com funções de php
// strtolower e strtoupper

$davi = 'davi';
$DAVI = 'DAVI';

$str1 = strtoupper($davi);
$str2 = strtolower($DAVI);

echo "imprimindo str1 $str1 <br>";
echo "imprimindo str2 $str2 <br>";

?>