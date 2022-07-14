<?php

    $host = 'localhost';
    $user = 'davi';
    $pass = 'davi1234';
    $db = 'cursophp';

    $conn = new mysqli($host, $user, $pass, $db);

    // $insertItens = "INSERT INTO itens (nome, descricao) VALUES ('Carro Honda Fit', 'Ano do carro 2015')";
    
    $table = 'itens';
    $nome = 'Pão de sal';
    $descricao = 'Pão quentinho e gostosinho pro café';
    
    $insertIten = "INSERT INTO $table (nome, descricao) VALUES ('$nome', '$descricao')";

    $conn -> query($insertIten);

    $conn -> close();
