<?php

    $comprar = [
        'batata' ,
        'maçã' ,
        "pêra" ,
        'feijão' ,
        'arroz'
    ];
    print_r($comprar);
    echo '<br>';

    $comprados = array_splice($comprar, 2, 2);
    
    print_r($comprar);
    echo '<br>';
    print_r($comprados);
    echo '<br>';