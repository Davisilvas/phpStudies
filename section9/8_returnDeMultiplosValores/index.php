<?php

    function operacoes($a, $b){
        $mult = $a * $b;
        $divisao = $a / $b;
        $soma = $a + $b;
        $subt = $a - $b;

        return [$mult, $divisao, $soma, $subt];
        // pra retornar mais de uma coisa basta colocar tudo dentro de um array.
    }

    $resultados = operacoes(5, 2);
    echo $resultados[0] . '<br>';
    echo $resultados[1] . '<br>';
    echo $resultados[2] . '<br>';
    echo $resultados[3] . '<br>';
    echo "A soma é $resultados[2] e a multiplicação é $resultados[0] <br>";
    print_r($resultados);
