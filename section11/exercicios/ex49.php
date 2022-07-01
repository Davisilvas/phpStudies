<?php

// usar o foreach

    $nome = 'Doly';
    $raca = 'yorkshire';
    $idade = 12;
    $fofa = 'demais';

    $dolyzinha = compact('nome', 'raca', 'idade', 'fofa');

//array que ta pegando os dados || chave || valor da chave
    foreach($dolyzinha as $caracteristica => $caracteristica2){
        echo $caracteristica . ' => ' . $caracteristica2. '<br>';
// o nome da variável do valor poderia ser $value kkkkk ia ficar mais fácil de entender o código depois.
    };

