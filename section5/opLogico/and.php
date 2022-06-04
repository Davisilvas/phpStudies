<?php 

    $a = 1;
    $b = 30;

    if($b>$a && 100>$b){
        echo 'deu true essa operação lógica';
    }

    echo '<br> agora vou fazer outra operação <br>';

    if($a > $b && 100 >$b){
        echo 'qualquer coisa';
    }else{
        echo 'deu false essa operação lógica';
    }

    echo '<br> agora vou fazer outra operação <br>';

    if((10 > 9 && 9 >8) && 8 > 7){
        echo 'mais uma operação lógica bem sucedida';
    }

    echo '<br> agora vou fazer outra operação <br>';

    if(2 > 1 && 3 > 2 && 1 > -1){ #true true e true
        echo 'mais uma operação bem sucedida';
    }

    if(2 < 1 && 3 > 2 && 1 > -1){ #false true e true
        echo 'mais uma operação bem sucedida';
    }
?>