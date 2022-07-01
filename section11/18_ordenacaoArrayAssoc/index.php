<?php

// Para ordenar em ordem crescente pelo VALOR das chaves é a função asort. Se quisermos ordenar pelas CHAVES utilizamos ksort.

    $arr = [
        'Davi' => 21,
        'Maria' => 23,
        'Doly' => 12,
        'Thor' => 5,
        'Tom' => 7
    ];

    print_r($arr);
    echo '<br><br>';

    echo 'asort usa os valores das chaves para ordenar <br>';
    asort($arr); # ORDEM DOS VALORES menor pro maior
    print_r($arr);
    echo '<br><br>';

    echo 'arsort usa os valores das chaves para ordenar, só que no reverso (decrescente)<br>';
    arsort($arr); #ordem reversa DECRESCENTE
    print_r($arr);
    echo '<br><br>';

    echo 'ksort usa as chaves para ordenar <br>';
    ksort($arr); # ORDEM DAS CHAVES menor pro maior
    print_r($arr);
    echo '<br><br>';

    echo 'krsort usa as chaves para ordenar, só que no reverso (decrescente) <br>';
    krsort($arr); #ordem reversa DECRESCENTE
    print_r($arr);
    echo '<br><br>';
    