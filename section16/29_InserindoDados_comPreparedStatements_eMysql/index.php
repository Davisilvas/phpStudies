<?php

    $host = 'localhost';
    $user = 'davi';
    $pass = 'davi1234';
    $db = 'cursophp';

    $conn = new mysqli($host, $user, $pass, $db);

    $stmt = $conn->prepare("INSERT INTO itens(nome, descricao) VALUES (?,?)");

    $descricao = 'Muito irada';
    $nome = 'Pelúcia Charizard';

    $stmt->bind_param('ss', $nome, $descricao); # s = string; i = integer; d = double;

    $stmt->execute();

?>