<?php 

    # i = idade
    $i1 = 21;
    $i2 = 23;
    $i3 = 17;
    $maioridade = 18;
    $msg1 = 'O indivíduo é maior de idade';
    $msg2 = 'O indivíduo não é maior de idade';

    if($i1 >= $maioridade){
        echo '1 ' . $msg1 . '<br>';
    }else{
        echo '1 ' . $msg2 . '<br>';
    }

    if($i2 >= $maioridade){
        echo '2 ' . $msg1 . '<br>';
    }else{
        echo '2 ' . $msg2 . '<br>';
    }


    if($i3 >= $maioridade){
        echo '3 ' . $msg1 . '<br>';
    }else{
        echo '3 ' . $msg2 . '<br>';
    }
?>