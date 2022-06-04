<?php 

    $a = '2';
    $b = 2;

    if($a === $b){
        echo 'Tá tudo igual chefia, pode prosseguir.';
    }else{
        echo 'Valores iguais mas com tipos diferentes. Acesso negado!' . "<br>";
    }

    if($a == $b){
        echo 'Tá tudo igual chefia, pode prosseguir. Mas aqui a gente só comparou o dado e não o tipo';
    }else{
        echo 'Valores iguais mas com tipos diferentes. Acesso negado!';
    }

?>