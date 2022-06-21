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
        //o Global acima chama variáveis de escopo global para o escopo local. Dessa forma eu posso manipular a variável dentro da função.
        //se a gente alterar o valor dessa variável no local, a gente vai alterar o valor dela no global também.

        echo "$teste dentro da function g2, var com escopo global utilizada. <br>";
    }

    g1();
    g2();

?>