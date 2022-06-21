<?php 

$x = 0; #contador

#1 parâmetro o contador, 2 parâmetro a condição e o 3 parâmetro é o incremento. Todos são separados por ; e não por ,
for($x; $x <= 10; $x++){

    if($x ==7){
        echo "aqui o X é igual a 7 <br>";
        continue;
        // break;
        //IMPORTANTE RESSALTAR QUE O CONTINUE E O BREAK TAMBÉM FUNCIONAM AQUI DENTRO DESSA ESTRUTURA, E SE BOBEAR NO DO-WHILE TAMBÉM
    }
    echo " O valor atual de X é: $x <br>";
}

// a gente pode fazer tanto como u fiz no primeiro caso, que eu trouxe uma variavel externa para servir como contador, como eu posso declarar uma variável no parãmetro mesmo, como será feito a seguir.

echo "<br> <br>";

for($z = 0; $z <= 10; $z++){

    if($z ==3){
        echo "aqui o Z é igual a 3 <br>";
        continue;
    }
    echo " O valor atual de Z é: $z <br>";
}

?>