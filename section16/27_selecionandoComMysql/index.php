<?php

    $host = 'localhost';
    $user = 'davi';
    $pass = 'davi1234';
    $db = 'cursophp';

    $conn = new mysqli($host, $user, $pass, $db);

    // Deletei itens da tabela itens com essa query
    // $deleteItens = "DELETE FROM itens WHERE id = 10";
    // $conn->query($deleteItens);

    $selectItens = "SELECT * FROM itens";

    $result = $conn->query($selectItens);

    // ISSO FUNCIONA PRA TRAZER APENAS UM RESULTADO. NESSE CASO O PRIMEIRO ITEM DA TABELA
    $item = $result -> fetch_assoc();

    // PARA MOSTRAR TODOS OS ITENS
    $itens = $result -> fetch_all();

    print_r($item);
    echo '<br><br>';
    print_r($itens);