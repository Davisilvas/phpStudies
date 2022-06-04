<?php 

$a = "5";
$b = 12;
$c = $a * $b;


print_r(gettype($c)); #virou um inteiro!
echo "<br>";
echo $c;
echo "<br>";echo "<br>";echo "<br>";

echo gettype([]);
echo "<br>";
echo gettype(2.2);
echo "<br>";
echo gettype('Davi');

?>