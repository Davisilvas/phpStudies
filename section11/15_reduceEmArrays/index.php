<?php

//  função reduce tem como objetivo reduzir um array a apenas um valor
// podemos passar uma segunda função como parâmetro, para algum processo ser executado. array_reduce($arr, $func)
// O NOME DA FUNÇÃO DEVER SER PASSADO EM STRING

    $arr = range(1, 50);

    function soma($a, $b){
        return $a + $b;
    }

    $resultado = array_reduce($arr, 'soma');
    echo $resultado . '<br>';

// primeira execução da função o índice 0 é o A e o 1 é o b. Aí na próxima execução o resultado (o return da função) é o A e o próximo índice é o B. E assim segue até o array acabar

// o reduce funciona sempre com o retorno que ele teve