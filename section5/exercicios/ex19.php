<?php 

$a = (int) 'testando'; #str com cast pra int viram um 0
echo $a;
echo '<br>';echo '<br>';

$b = (int )12.9; #float é arredondado!
echo $b;
echo '<br>';echo '<br>';

$c = (int) true;
echo $c; echo '<br>';
if(4 > 3 === 1){
    echo 'imprimindo if 3';
}

// $c = (int) true; esse vai imprimir de fato o if pois o 1 realemente vale como int aqui.
// echo $c; echo '<br>';
// if(4 > 3 === 1 > 0){
//     echo 'imprimindo if';
// }
echo '<br>';echo '<br>';

$d = (int) [1, 2, 3]; #array sempre vira o número 1.
echo $d;
echo '<br>';echo '<br>';

?>