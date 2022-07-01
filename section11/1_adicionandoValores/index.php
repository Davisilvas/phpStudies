<?php 

// podemos criar novos índices com dados em um array;
//Basta por o nomo do array com o novo indice em colchetes e atribuir um valor -> $arr[1]='cavalo';
// nos associativos basta utilizar o nomo da nova chave com a atribuição de valor.

    $arr = [];
    $arr[0] = 'Davi';
    $arr[1] = 'Maria Eduarda';
    $arr[2] = 'Dolyzinha'; #isso aqui pode ser usado pra substituir o valor de um array também.

    print_r($arr);

    echo '<br>';
    $arr[2] = 'Tom Gatinho';
    $str = implode(' - ', $arr);
    echo $str . '<br>';
    echo '<br>';


    for($i = 0; $i < count($arr); $i++){
        echo "À seguir a nota do aluno(a): $arr[$i] <br>";
    }
    echo '<br>';
    echo '<br>';


    $numbers = [];

    for($i = 0; $i <= 20; $i++){
        array_push($numbers, $i);
    } #fiz isso aqui pra relembrar como que se faz um array de forma automatizada, e eu consegui de primeira :

    print_r($numbers);
    echo '<br>';
    echo '<br>';


    for($i = 0; $i < count($numbers); $i++){
        echo "$numbers[$i] <br>";
    };


    $arrSoc = [];

    $arrSoc['carro'] = 'Mercedez-Benz';

    echo '<br>';
    echo '<br>';
    print_r($arrSoc);