<?php

// Podemos calcular a diferença entre duas datas com o método diff. O resultado pode ser formatado com o FORMAT

// $diferena= $dateA->diff($dateB);

    $dateA = new DateTime();
    $dateA->setDate(2001, 03, 27);

    $dateB = new DateTime();

    $diferenca = $dateA->diff($dateB);
    print_r($diferenca);
    echo '<br>';
    echo '<br>';

    echo $diferenca -> format('%a days');
    