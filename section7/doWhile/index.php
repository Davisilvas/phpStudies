<?php 

    $a = 0;
    $x = 10;
    $texto = "Trazendo uma var global para o do-while <br>";

    do{
        echo "O valor atual de A é: $a <br>";
        if($a == 5){
            echo $texto;
        }
        $a++;
    }while($a < $x);

    $b = 10;
    $z = 0;

    do{
        echo "O valor atual de B é: $b <br>";
        if($b == 5){
            echo $texto;
        }
        $b--;
    }while($b > $z);

?>