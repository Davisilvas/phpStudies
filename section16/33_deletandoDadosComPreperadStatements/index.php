<?php

    $host = 'localhost';
    $user = 'davi';
    $pass = 'davi1234';
    $db = 'cursophp';

    $conn = new mysqli($host, $user, $pass, $db);

    $stmt = $conn->prepare("DELETE FROM itens WHERE id =?");

    $id = 14;

    $stmt->bind_param("i", $id);

    $stmt -> execute();

    $conn->close();