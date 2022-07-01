<?php

// Podemos verificar qual a diferença entre dois ou mais arrays com php. A função que vamos utilizar para isso é a array_diff. Essa função aceita um número indeterminado de arrays.
// ela vai mostrar quais são os itens que estão diferentes em ambos os arrays

    $arr1 = [1, 2, 3];
    $arr2 = [2, 4, 6];
    $arr3 = [4, 6];

    $diff = array_diff($arr1, $arr2);
    print_r($diff);
    echo '<br><br>';
// viu que o que os arrays tem em comum é o 2 e separou o 1 e o 3 que são únicos no array1

    $diff2 = array_diff($arr2, $arr1);
    print_r($diff2);
    echo '<br><br>';
//viu que o que os arrays tem em comum é o 2 e separou o 4 e 6 que são únicos no array2  

    $diff3 = array_diff($arr2, $arr1, $arr3);
    print_r($diff3);
    echo '<br><br>';
// vai imprimir vazio pq todos os elementos foram encontrados nos arrays.