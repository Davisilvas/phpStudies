<?php 

// Com a função compact podemos criar um array a partir de variáveis.
// Passamos para a função o nome das variáveis em string.
// E então um novo array é criado, podemos atribuir a uma variável
// chave = nome da variável || valor = valor da variável; 

    $nome = 'Davi';
    $idade = 21; 
    $time = 'Vasco da Gama';

    $compilado = compact('nome', 'idade', 'time');
    print_r($compilado);

