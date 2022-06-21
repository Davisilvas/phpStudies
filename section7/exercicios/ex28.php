<?php 

$a = 4;
$b =24;
$x = 30;

while ($a < $x){
    echo $a . "<br>";

    if($a === $b){
        echo "encerrando o loop pois o contador chegou a $b <br>";
        break;
    }

    $a += 2;
}
?>