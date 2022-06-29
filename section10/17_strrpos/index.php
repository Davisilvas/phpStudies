<?php 

// mesma coisa que a aula anterior, só que essa função pega a última ocorrência e não a primeira

$str = 'Testando encontrando palavra teste, em uma string que tem teste';

$strr = strrpos($str, 'teste'); #palheiro e agulha

echo $strr . '<br>';

$strr2 = strpos($str, 'teste');

echo $strr2 . '<br>';

// forma de usar essa função

$p = substr($str, strpos($str, 'teste'), 5);

echo $p . '<br>';
