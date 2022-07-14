<?php

    $host = 'localhost';
    $user = 'davi';
    $pass = 'davi1234';
    $db = 'cursophp';

    $conn = new mysqli($host, $user, $pass, $db);

    $stmt = $conn->prepare("UPDATE itens SET nome = ?, descricao = ? WHERE id = ?"); # query que a gente faria direto no DB
    
    $id = 15;
    $nome = 'Teclado Mecânico Gamer Husky';
    $descricao = 'Teclado com RGB e Switch Azul';

    $stmt -> bind_param("ssi", $nome, $descricao, $id); #parâmetros que serão substituidos na query

    $stmt -> execute(); #exeutando

    if($stmt->error){
        echo "Erro: " . $stmt->error . "<br>";
    }

    $conn -> close();