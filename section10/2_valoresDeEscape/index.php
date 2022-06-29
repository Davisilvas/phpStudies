<?php 

// são códigos que executam funções especiais nas nossas strings. Para esses código funcionarem eles precisam estar envoltos em aspas duplas.

// ESCAPE STRINGS PHP
 // /n = nova linha
 // /t = tab (recuo)
 // // = linha invertida
 // /$ = sinal de dólar 

    header("content-type: text/plain");
    
    function calculo($a, $b, $c){
        $r = $a + $b *$c;
        return "O resultado da conta é: $r";
    }

    $a = 5;
    $b = 3;
    $c = 7;
    
    echo calculo($a, $b, $c) . "\n\n";

    echo "Primeira linda\nSegunda linha";

    echo "\n\nMais perto da margem \t mais recuado";

    echo "\n\nDolar bill \$";
    // útil para quando a gente quer imprimir o nome da variável no sistema. pois se a gente coloca $teste vai imprimir o valor de teste e não o nome. Aí para isso a gente faz \$teste.

    echo "\n\nBarra invertida \\";
    // útil para quando a gente quer imprimir apenas essa barra no sistema. se a gente colocar apenas a \ vai dar erro pois os sistema vai estar esperando um comando. Se a gente coloca \\ ele entende que é um escape e imprime a barra

    //porém sem nenhuma modificação esses comandos não serão executados. Pois são comandos php que vão estar rodando no nosso navegador, em hmtl.

    //para ter uma melhor experiência é necessário que a gente faça que a saída deixe de ser texto html e passe a ser texto puro. A gente pode fazer isso através da função header(). 

    // note que após a conversão para texto puro o <br> deixa de ser interpretado justamente pq ele é interpretado pelo html. Ele e todos os comandos html deixarão de funcionar.

?>