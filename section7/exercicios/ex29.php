<?php 

$numbers = [10, 20, 30, 40, 50, 60, 70, 80, 90, 100];
$x = count($numbers); #Isso aqui poderia estar direto na condição do while, que nem o instrutor fez.
$y = 0;

while($x > $y){

    if($y == 2 || $y == 3){
        echo "pulando essa parte aqui <br>";
        $y++;
        continue;
    }

    echo "o valor da vez é $numbers[$y] <br>";
    $y++;
}

// FORMA DO PROFESSOR

$arr = [10, 20, 30, 40, 50, 60, 70, 80, 90, 100];
$i = 0;

while ($i < count($arr)){

    $numeroAtual = $arr[$i];

    if($numeroAtual == 30 || $numeroAtual == 40){
        $i++;
        continue;
    }

    echo "Elemento $numeroAtual <br>";
    $i++;

}


?>