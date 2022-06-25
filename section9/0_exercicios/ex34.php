<?php 

function par($n){
    if( $n % 2 == 0){
        // LEMBRAR QUE = ATRIBUIÇÃO E == IGUAL
        echo "O número $n é par pois se dividido por 2 ele é igual a 0 <br>";
    }else{
        echo "O núemro $n é impar pois se dividido por 2 ele tem resto igual a 1. <br>";
    }
}

par(10);
par(11);


?>