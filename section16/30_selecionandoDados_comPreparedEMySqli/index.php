<?php

    $host = 'localhost';
    $user = 'davi';
    $pass = 'davi1234';
    $db = 'cursophp';

    $conn = new mysqli($host, $user, $pass, $db);

    $id = 5;

    $stmt = $conn->prepare("SELECT * FROM itens WHERE id >= ?");

    $stmt->bind_param("i",$id);

    $stmt->execute();

    $result = $stmt->get_result(); 

    $data = $result->fetch_all(); 

    print_r($data);