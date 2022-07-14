<?php

    $host = 'localhost';
    $user = 'davi';
    $pass = 'davi1234';
    $db = 'cursophp';

    $conn = new PDO("mysql:host=$host;dbname=$db",$user, $pass);

    $stmt = $conn -> prepare("INSERT INTO itens (nome, descricao) VALUES (:nome, :descricao)");

    $nome = "Abajur";
    $descricao = "Cor: Amarelo";
    
    $stmt -> bindParam(":nome", $nome);
    $stmt -> bindParam(":descricao", $descricao);

    $stmt -> execute();

