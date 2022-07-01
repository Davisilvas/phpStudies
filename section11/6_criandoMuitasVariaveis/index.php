<?php 
// podemos criar muitas variáveis com base em um array. Para isso vamos usar a função list. Ex list($nome, $idade, $profissao) = $pessoa;

// os parâmetros são os nomes das variáveis e a gente atrivui a essa função o array que a gente deseja


    $pessoa = [
        'Davi',
        21,
        'Desencolvedor Full Stack'
    ];

    list($nome, $idade, $profissao) = $pessoa; // a função recebe o array com os dados através dessa atribuição aqui.

    echo "Olá meu nome é $nome eu tenho $idade ano e atuo como $profissao <br>";


