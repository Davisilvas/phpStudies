<?php

    $host = 'localhost';
    $user = 'davi';
    $pass = 'davi1234';
    $db = 'cursophp';

    $conn = new PDO("mysql:host=$host;dbname=$db",$user, $pass);

    $stmt = $conn -> prepare("UPDATE itens SET nome = :nome, descricao = :descricao WHERE id = :id");

    $nome = "Caneca Avengers";
    $descricao = "Caneca de porcelana muito bonita com temática dos Vingadores";
    $id = 1;

    $stmt -> bindParam(":nome", $nome);
    $stmt -> bindParam(":descricao", $descricao);
    $stmt -> bindParam(":id", $id);

    $stmt -> execute();