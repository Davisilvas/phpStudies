<?php 

// ALTER TABLE person
// MODIFY COLUMN name VARCHAR(255) NOT NULL

// CREATE TABLE usuario(
//     email VARCHAR(200) NOT NULL,
//     password INT NOT NULL,
//     gender VARCHAR(50)
// );


// INSERT INTO usuario (email, password, gender) VALUES("morg.daviss@gmail.com", 123456789, "Masculino");

# Modo pra tornar o banco estrito, não aceitar 'erros'
// SET @@GLOBAL.SQL_MODE = 'STRICT_ALL_TABLES'; 

// INSERT INTO usuario (gender) VALUES("Masculino");
#1364 - Field 'email' doesn't have a default value

#inserção apenas de dados marcados como NOT NULL, o gender como aceita valor nulo não foi inserido
// INSERT INTO usuario (email, password) VALUES("finge que esse é o email da maria", 111222333);

?>