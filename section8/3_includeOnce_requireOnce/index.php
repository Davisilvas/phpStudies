<?php 
//NORMALMENTE SÃO OS MÉTODOS MAIS INDICADOS.
// include_once "jjjj.php";
include_once "teste.php";
include_once "teste.php";

//vimos no navegador que o feito acima não vai repetir o echo do arquivo teste.php duas vezes. Se fosse o include normal, o echo seria impresso duas vezes, e isso é desncessário e pode pesar a página a toa.

//REQUIRE 
//ERRADO - o que vem antes é executado, mas tudo que vier daqui pra baixo não vai ser.
// require_once "jjjj.php";
require_once "teste2.php";
require_once "teste2.php";



?>

<h1>executandoooo</h1>