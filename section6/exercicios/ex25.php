<?php 

$var1 = 12;
$var2 = 'A multiplicação resultante é menor do que 100 :c <br>';

if(is_int($var1)){
    echo "a primeira variável é um número!<br>";
    $mult = $var1 * 2;

    if($mult >= 100){
        echo "a multiplicação resultante é maior que 100!<br>";
    }else{
        echo $var2;
    }
}

?>