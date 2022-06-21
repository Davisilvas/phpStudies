<?php 

    $a = 10;
    $b = 0; #contador

    while($a >= $b){
        echo $b . "<br>";
        $b = $b + 1; #incremento do contador.
    }
    //para acrescentar um novo valor a mesma variável nós devemos fazer o que foi feito na linha 8. Nela temos a sintaxe: Novo valor de $b vai receber valor antigo de $b + 1.

    echo'<br><br>';
    $c = 0;

    while($a >= $c){
        echo $c . "<br>";
        $c += 2; #incremento rápido.
    }

    echo'<br><br>';
    $d = 10;

    //aqui n deu pra reutilizar a variável $b pois ela termina a estrutura com um novo valor para o escopo inteiro do código. O valor não reseta ao fim da execução da estrutura de repetição.

    while(0 < $d){ #pode ser < ou <=
        echo $d . "<br>";
        $d--;
    }


    echo'<br><br>';
    $e = 10;

    while($e > 0){ #vai mostrar os números ímpares de 10 até 0.
        if($e % 2 != 0){
            echo $e . "<br>";
        }
        $e--;
    }
?>