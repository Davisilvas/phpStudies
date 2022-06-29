<?php

    // a função implode convert um array em uma string!
    // ao invés da gente retirar um espaçador, nesse a gente vai colocar um.

    $vascoArr = [
        'o',
        'Vasco', 
        'é',
        'o ',
        'maior',
        'clube',
        'do',
        'Rio'
    ];

    print_r($vascoArr);
    
    $vascoStr = implode(' ', $vascoArr);

    echo '<br>' . $vascoStr;
