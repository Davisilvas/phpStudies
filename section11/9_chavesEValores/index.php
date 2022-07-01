<?php 

// Com a função array_keys recebemos um array apenas com as CHAVES de um array. Com a função array_value recebemos um array apenas com os VALORES de um array.
// Isso aqui tem o foco para o array associativo.

    // include_once "../exercicios/ex47.php";

    // print_r($carro);
    // echo '<br><br>';

    // $chaves = array_keys($carro);
    // print_r($chaves);
    // echo '<br><br>';

    $mercedez = [
        'ano' => 2021,
        'motor' => 2.4,
        'opcional' => 'teto solar',
        'aro' => 18
    ];

    $chaves = array_keys($mercedez);
    print_r($chaves);
    echo '<br><br>';

    $valores = array_values($mercedez);
    print_r($valores);
    echo '<br><br>';

    // uma forma rápida de transformar um array associativo num array normal.