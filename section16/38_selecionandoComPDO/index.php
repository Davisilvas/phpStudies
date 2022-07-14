<?php

    $host = 'localhost';
    $user = 'davi';
    $pass = 'davi1234';
    $db = 'cursophp';

    $conn = new PDO("mysql:host=$host;dbname=$db",$user, $pass);

    $stmt = $conn -> prepare("SELECT * FROM itens WHERE id > :id");

    $id = 5;

    $stmt -> bindParam(":id", $id);

    $stmt -> execute();

    // ESSE ATRIBUTO SERVE PRA FAZER COM QUE OS DADOS NÃO VENHAM DUPLICADOS. SEM ELE OS DADOS SÃO ENTREGUES DUPLICADOS.
    $result = $stmt -> fetch(PDO::FETCH_ASSOC); #pega só a primeira linha
    $result2 = $stmt -> fetchAll(PDO::FETCH_ASSOC); #pega todas as linhas que atendem a condição

    print_r($result);
    echo '<br><br>';
    print_r($result2);