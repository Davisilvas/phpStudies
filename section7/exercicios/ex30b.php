<?php 

    //$numeros = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];

    
    //forma errada, dessa forma os novos números sempre serão o indice 0 e irão sobrescrever o anterior.
    // for($i = 0; $i <= 10; $i++){
    //     $numeros = [];
    //     array_push($numeros, $i);
    //     print_r($numeros);
    //     echo '<br>';
    // }

    //CORRETO

    $numeros =[];

    for($i = 0; $i <= 10; $i++){
        array_push($numeros, $i);
    }

    print_r($numeros);
    echo '<br>';

?>