<?php 

    $dados = [1, 2, 3.5, 'Davi', 'Maria', 'Doly', 'Thor', 8, 9, 10];
    $x = count($dados); # conta os index desse array
    $y = 0;
    while($y < $x){
        //checagem no índece do array
        if(is_string($dados[$y])){
            echo $dados[$y] . "<br>";
        }
        $y++;
    }
?>