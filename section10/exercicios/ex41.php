<?php 

$frase1 = 'ESTE ITEM ESTA EM ';
$promo = 'promocao';

$str1 = strtolower($frase1);
$firstL = ucfirst($str1);
$PROMO = strtoupper($promo);

echo $firstL . $PROMO;

?>