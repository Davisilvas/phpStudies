<?php

// Com essa função podemos criar variáveis rapidamente a partir de arrays associativos
// O nome da chave será o nome da variável
// Se já houver uma variável com o nome da chave, esta será sobrescrita.

    $futebol = 'jogador caro';
    echo $futebol . '<br>';

    $davi = [
            'nome' => 'Davi',
            'idade' => 21,
            'profissao' => 'Desenvolvedor',
            'futebol' => 'Joga muito'
    ];

    print_r($davi);
    echo '<br><br>';

    extract($davi);
    echo "$nome $idade $profissao  $futebol <br>";
