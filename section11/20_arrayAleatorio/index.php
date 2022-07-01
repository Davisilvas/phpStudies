<?php

// Com a função shuffle podemos reorganizar os itens em ordem aleatória. Passamos apenas o array como parâmetro. A função não altera o array, ela retorna um novo e aleatório.

    $arr = range(0, 10);
    //shuffle($arr);
    print_r($arr);
    echo '<br><br>';

    $rar = shuffle($arr);
    print_r($arr);
    echo '<br><br>';

    $raar = shuffle($arr);
    print_r($arr);
    echo '<br><br>';

// obs: toda vez que a gente da um f5 na página a função é executada e o array recebe uma nova ordem aleatória.

// se a gente não atribuir a função a uma variável, o array original será alterado sim-