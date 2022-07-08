<?php


// SERVER_SOFTWARE -> identificação do servidor;

// SERVER_NAME -> Hostname, DNS ou IP do servidor;

// SERVER_PROTOCOL -> Protocolo do servidor;

// SERVER_PORT -> Porta do servidor

// QUERY_STRING -> Argumentos após o ? na URL;

    print_r($_SERVER);
    echo '<br>';
    echo '<br>';

    echo $_SERVER['MYSQL_HOME'] . '<br>';
    echo '<br>';
    echo '<br>';

    if($_SERVER['SERVER_NAME'] == 'localhost'){
        echo 'Está sendo acessado do localhost';
    }
    echo '<br>';
    echo '<br>';