<?php 

    $arr = [
        [0, 1, 2, 3],
        [4, 5, 6, 7],
        [8, 9, 10, 11]
    ];

    for($i = 0; $i < count($arr); $i++){

        //contador do array externo
        echo "imprimindo o array externo " . ($i + 1) . '<br>';

        for($x = 0; $x < count($arr[$i]); $x++ ){
            //contador do array interno
            echo $arr[$i][$x] . '<br>'; //[$i] acessando o índice do array externo e [$x] indice do array interno.
        }


    }
