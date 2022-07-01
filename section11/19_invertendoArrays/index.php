<?php

// com a função array_reverse podemos obter o array ao inverso. Passamos apenas o array como argumento. O retorno será um array invertido do original.

// não altera a estrutura original, e sim retorna um novo array

    $arr = range(0, 10);
    print_r($arr);
    echo '<br><br>';

    $rra = array_reverse($arr);
    print_r($rra);
    echo '<br><br>';

    print_r($arr);


