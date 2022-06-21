<?php 

$numeros = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20];

for($x = 0; $x < count($numeros); $x++){
    $impar = $numeros[$x];

    if($impar % 2 != 0){
        echo $impar . "<br>";
    }
}

echo "<br><br><br>";

for($z = 0; $z < count($numeros); $z++){
    $par = $numeros[$z];

    if($par % 2 == 0){
        echo $par . "<br>";
    }
}

?>