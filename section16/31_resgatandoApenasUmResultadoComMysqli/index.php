<?php

    $host = 'localhost';
    $user = 'davi';
    $pass = 'davi1234';
    $db = 'cursophp';

    $conn = new mysqli($host, $user, $pass, $db);

    $id = 11;

    $stmt = $conn->prepare("SELECT * FROM itens WHERE id = ?"); #"fazendo a query"

    $stmt->bind_param("i",$id); #colocando os dados da query

    $stmt->execute(); #executando a query

    $result = $stmt->get_result(); #pegando o resultado da query e armazenando numa variável

    $item = $result->fetch_row(); #pegando o resultado e transformando em um array legível pra gente e armazenando em uma variável

    print_r($item);

    $conn -> close();