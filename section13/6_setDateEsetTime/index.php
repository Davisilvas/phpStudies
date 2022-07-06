<?php

// setDate -> recebe ano, mês e dia alterando totalmente a data.
// setTime-> recebe hora, minuto e segundo alterando o tempo da data.

    $data = new DateTime();

    print_r($data);
    echo '<br>';

    # alterando a data do objeto.
    #pode ser manipulado com format e etc. 
    $data->setDate(2001,03,27);
    print_r($data);
    echo '<br>';
    echo $data->format('l - F - Y');
    echo '<br>';

    #alterando o tempo do objeto
    $data->setTime(10,43,00);
    print_r($data);
    echo '<br>';