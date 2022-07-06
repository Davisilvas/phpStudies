<?php

// format - formata a data
// modify - altera a data
// ambos os métodos são da classe DateTime e nos ajudam a mainpular os dados nestes objetos

    $data = new DateTime();

    print_r($data);
    echo '<br>';
    echo $data->format('d - m - Y'); 
    echo '<br>';
    echo $data->format('l - F - Y');
    echo '<br>';


    // a partir daqui a data alterada pelo modify

    $data -> modify('+2 months');
    echo $data->format('d - m - Y'); 
    echo '<br>';
    echo $data->format('l - F - Y');

// as mesmas coisas que funcionam no date vão funcionar aqui. A diferença é que aqui é orientado a objeto.