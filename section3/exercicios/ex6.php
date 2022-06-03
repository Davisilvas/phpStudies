<?php 

    $hondaFit = ['carroceria' => 'Hatchback',
    'rodas' => 'liga leve',
    'cambio' => 'automático 6 velocidades',
    'ano' => 2019];

    echo $hondaFit['carroceria'];
    echo '<br>';
    echo $hondaFit['rodas'];
    echo '<br>';
    echo $hondaFit['cambio'];
    echo '<br>';
    echo $hondaFit['ano'];

    echo '<br>';
    echo '<br>';


    $carroceria = $hondaFit['carroceria'];
    $rodas = $hondaFit['rodas'];
    $cambio = $hondaFit['cambio'];
    $ano = $hondaFit['ano'];


    echo "o Honda Fit é do ano $ano, com carroceria $carroceria e rodas de $rodas com câmbio $cambio"
?>