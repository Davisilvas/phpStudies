<?php

//Recebe uma string como parâmetro que é um texto sinalizando o tempo. A função tenta interpretar e transformar em data
// ex -> date('d/m/y', strtotime("+2 years"))

// 'transforma o tempo em string'
    $d1 = date('d - m - Y');
    echo $d1 . '<br>';

    $d2 = date('d - m - Y', strtotime('+2 years'));
    echo $d2 . '<br>';

    $d3 = date('d - m - Y', strtotime('+2 months'));
    echo $d3 . '<br>';

    $d4 = date('d - m - Y', strtotime('+2 days'));
    echo $d4 . '<br>';

    $d5 = date('d - m - Y', strtotime('+2 weeks'));
    echo $d5 . '<br>';

    $tempo = strtotime('+2 days');
    echo $tempo . ' ISSO É A REPRESENTAÇÃO DO QUE SÃO 2 DIAS PARA O PHP <BR>';