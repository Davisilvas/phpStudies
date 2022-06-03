<?php 

    $teste = 'Davi';
    echo "$teste <br>";

    if (4<30){
        $teste = 'Maria';
        echo "$teste <br>";
    }

    echo "$teste <br>";


    function g1(){
        $teste = 'teste inside function';
        echo "$teste <br>";
    }

    function g2(){
        global $teste;

        echo "$teste dentro da function g2, var com escopo global utilizada. <br>";
    }

    g1();
    g2();

?>