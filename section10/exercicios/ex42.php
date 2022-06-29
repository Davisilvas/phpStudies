<?php 

$str = 'Cadê o meu queijo? Ele estava aqui em cima.';
$queijo = substr($str, 12, 6);
$estava = substr($str, 24, 6);

echo $queijo . '<br>';
echo $estava . '<br>';

//bom pra usar quando a gente recebe uma string que a gente não consegue manipular na fonte, como quando a gente recebe ela de uma api


?>