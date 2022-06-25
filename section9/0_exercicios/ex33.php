<?php 

function greeting($name, $age){
    if(is_string($name) && is_int($age)){
        echo "Olá meu nome é $name e tenho $age anos. <br>";
    }elseif(is_string($name) == false && is_int($age) == false){
        echo 'Por favor insira os dados de maneira correta. <br>';
    }elseif(is_string($name) == false){
        echo 'Por favor insira uma string para $name. <br>';
    }elseif(is_int($age) == false){
        echo 'Por favor insira um número inteiro para $age. <br>';
    }
}


greeting('Davi', 21);
greeting(21.2, 21.2);
greeting(22.2, 21);
greeting('Davi', 21.2);

?>