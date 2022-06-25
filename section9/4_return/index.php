<?php 

function par($n){
    $resultado = '';
    if( $n % 2 == 0){
        // LEMBRAR QUE = ATRIBUIÇÃO E == IGUAL
        return $resultado = "O número $n é par pois se dividido por 2 ele é igual a 0 <br>";

    }else{
        return $resultado = "O núemro $n é impar pois se dividido por 2 ele tem resto igual a 1. <br>";
    }
}

echo par(66);
echo par(65);

?>