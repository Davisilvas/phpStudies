<?php

    $host = 'localhost';
    $user = 'davi';
    $pass = 'davi1234';
    $db = 'cursophp';

    $conn = new mysqli($host, $user, $pass, $db);

    if($conn -> connect_errno){
        echo 'Há um erro na conexão <br>';
        echo 'Erro: ' . mysqli_connect_error();
    }else{
        echo 'Success <br>';
    }
?>