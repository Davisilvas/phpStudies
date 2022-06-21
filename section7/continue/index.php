<?php 

$a = 10;

while($a > 0){

    if($a == 5 || $a ==7){
        echo "Pulou o $a <br>";
        $a--; 
        #tem que realizar esse decremento ou incremento pra condição não ficar travada sempre no número em questão e executar ele eternamente.
        continue;
    }

    if($a == 2){
        echo "Terminando o loop pois chegou a $a <br>";
        break;
    }

    echo "executando o loop $a <br>";
    $a--;

}

?>