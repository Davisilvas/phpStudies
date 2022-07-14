<?php

    $host = 'localhost';
    $user = 'davi';
    $pass = 'davi1234';
    $db = 'cursophp';

    $conn = new mysqli($host, $user, $pass, $db);

    $sql = "SELECT * FROM itens";

    $result = $conn -> query($sql);
    print_r($result);

    $conn-> close();