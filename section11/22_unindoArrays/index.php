<?php

// podemos unir arrays, a ação também é conhecida como merge. A função que vamos utilizar é a array merge. Ela aceita um número indeterminado de arrays como argumento.

    $a = range(1, 10);
    $b = range(11, 20);
    
    $c = array_merge($a, $b);
    
    print_r($a);
    echo '<br><br>';
    print_r($b);
    echo '<br><br>';
    print_r($c);

// Ela não cria um array multidimensional. Ela cria um array completo com os itens dos arrays passados. ele não limita o tipo de dado, ele adiciona todos os valores num só.