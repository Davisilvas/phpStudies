<?php 

//se o loop interno executa 10 vezes e o externo 5 vezes, temos que o interno vai executar 50 vezes. Pois para cada vez que o loop externo roda, o interno vai rodar por completo.

    $a = 1;

    while($a <= 10){
        
        echo "Loop externo " . $a . '<br>';

        //loop interno 
        $x = 1;
        while($x <= 5){
            echo "Loop interno $x$x$x$x <br>";

            $x++;
            //O loop interno não mantém o contador. O Valor de X sempre é resetado ao fim da execução.
        }

        $a++;
    }

?>