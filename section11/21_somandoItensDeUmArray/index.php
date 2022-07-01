<?php

// Usamos a função array_sum para isso. Ela nos retorna a soma de todos os elementos numéricos do array que passamos como argumento

    $a = range(1, 10);
    $b = range(1 ,11);
    $c = [
        1, 333, 5556454, 767, 78787, 34243, 'Davi', true
    ];

    $d = array_sum($c);
    $x = array_sum($b);

    echo $x . '<br>';
    echo $d;

// Essa função vai ignorar a existência de valores strings como vimos no array $c. Ela soma apenas os NUMÉRICOS (e booleanos pq no final das contas o true é 1 né)!!

