<?php

// A função date recebe um parâmetro que é o formato da data, e este é o primeiro parâmetro da mesma. A resposta será a data atual
// date("d/m/y"); Day / Month / Year

    $data = date("y/m/d"); // ano - mês - dia
    echo $data . '<br>';

    $data2 = date("D, M - Y");
    echo $data2 . '<br>';

    $data3 = date("d, M - Y");
    echo $data3 . '<br>';

// pesquisar tabela de significados na documentação do php (só jogar php date no google)

// a função date formata a data informada conforme o que a gente quer. E caso a gente não informe alguma data específica, por padrão ele formata a data atual.