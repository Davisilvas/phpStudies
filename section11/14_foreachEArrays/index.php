<?php

// Com a notação chave=>valor podemos usar o array associativo dentro do foreach facilmente. Ex: ($itens as $key => $value){}

    $dados = [
        'nome' => 'Davi',
        'idade' => 21,
        'altura' => 1.89,
        'estudante' => true
    ];

    print_r($dados);
    echo '<br><br>';

    $i = 0;
    foreach($dados as $key => $value){
        $i++;
        echo "$i. $key: $value <br>";
    }
    echo '<br><br>';


    // o valor de $i não resetou"
    // Se a gente fizer essa estrutura de key e value pra um array não associativo, a gente vai ter acesso ao número do index do array.
    $teste = range(1,10);
    foreach($teste as $key => $value){
        $i++;
        if($key == 7){
            echo 'A chave chegou a 7, vou parar!';
            break;
        }
        echo "$i. $key: $value <br>";
    }

