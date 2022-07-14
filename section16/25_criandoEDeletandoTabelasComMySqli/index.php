<?php

    $host = 'localhost';
    $user = 'davi';
    $pass = 'davi1234';
    $db = 'cursophp';

    $conn = new mysqli($host, $user, $pass, $db);

    // criando tabela
    $testeTable = "CREATE TABLE teste (nome VARCHAR(100), sobrenome VARCHAR(100))";

    // deletando tabela
    $dropCarros = "DROP TABLE carros";
    $dropTeste = "DROP TABLE teste";

    $conn -> query($dropCarros);
    $conn -> query($dropTeste);
    
    $conn -> close();