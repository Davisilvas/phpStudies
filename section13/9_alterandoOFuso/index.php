<?php

// o Php por padrão vai utilzar o fuso da máquina em que está sendo executado. Ou seja, do servidor. Podemos alterar manualmente com a função date_default_timezone_set
// Essa função recebe como parâmetro o novo fuso em string.

    date_default_timezone_set('America/Sao_Paulo');

    $data = new DateTime();
    print_r($data);

    // as vezes é melhor compensar do que forçar o fuso
    