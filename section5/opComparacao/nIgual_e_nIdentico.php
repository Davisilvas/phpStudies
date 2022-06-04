<?php 

    #não igual **********
    echo 'Estudando o != <br>';
    $a = 2;
    $b = 3;
    $c = 2;
    $d = $a != $b;
    $e = $a != $c;

    if($d){
        echo gettype($d) . '<br>';
        echo $d;
    }else{
        echo 'Mano isso tá igual';
    }

    echo '<br>';echo '<br>';

    if($e){
        echo gettype($e) . '<br>';
        echo $e;
    }else{
        echo 'Mano isso tá igual';
    }

        #não identico **********

    echo '<br>';echo '<br>';echo '<br>';echo '<br>';
    echo 'Estudando o !== <br>';

    $aa = 2;
    $bb = '3';
    $cc = $aa !== $bb;

    if($cc){
        echo 'tudo diferente, dado e tipo.';
    }else{
        echo 'tem coisa igual ai';
    }

?>