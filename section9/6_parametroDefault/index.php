<?php 

    // Parâmetro com um valor pré-definido. Ou seja, mesmo que a gente não passe nenhum argumento para a função na hora de chamar ela, não vai dar erro. Pois no lugar do argumento que a gente deveria inserir já vai ter um argumento como padrão e os comandos serão executados com ele.

    function teste($a = 'teste'){
        echo "$a <br>";
    }

    teste(); 
    teste('tribal');

    // A boa prática quando formos usar argumentos default é deixar eles por último, pois se tivermos mais de um argumento para passar e o default vier antes do que a gente tem que informar, a gente vai estar obrigado a passar o default de qualquer jeito.

    
    //errado abaixo
    // function teste2($a = 'teste', $b){
    //     echo "valor de $a e valor de $b<br>";
    // }

    // teste2(2);

    #FORMA CERTA!!!!!!!
    function teste2($b, $a = 'teste'){
        echo "valor de $a e valor de $b<br>";
    }

    teste2(2);
        

?>