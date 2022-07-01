<?php 

// Quando inserimos um array dentro de outro array a gente cria um array multidimensional, ou conhecido também como matriz.

// Para fazer o acesso desse tipo de array também utilizamos indices acessando primeiro o externo e depois os internos. Exemplo $arr[1][0]

// estruturas de matriz linhas e colunas.

$arrDeTeste = [
    0,
    2,
    4,
    6,
    [1,
    3,
    5,
    7]
];

echo $arrDeTeste[4][2] . '<br>';

$soma = $arrDeTeste[4][3] + $arrDeTeste[3];

echo $soma . '<br>';

$matriz = [
    [1, 2, 3, 4, 5],
    [6, 7, 8, 9, 10]
];

print_r($matriz);

echo '<br><br>';

echo $matriz[0][3] . '<br><br>'; //acessando o primeiro array indice 3 dele
echo $matriz[1][2] . '<br><br>'; //acessando o segundo array indice 2 dele

// se a gente simplesmente der um count ele vai contar o array principal, que tem dois elementos, os dois arrays.

echo count($matriz) . '<br>';

// pra dar o count de um array dentro de um array a gente tem que fazer o seguinte:

echo count($matriz[0]) . '<br>'; #dessa forma acessamos o array dentro do array.