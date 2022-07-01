<?php  

// com a função array_slice podemos resgatar uma faixa de elementos de um array. A ela nós passamos 3 parâmetros, o array, o índice inicial e quantos elementos queremos resgatar a PARTIR do índice.

    $muitos = range(1,50);

    $poucos = array_slice($muitos, 19, 11);

    print_r($poucos);

    // se a gente omitir o índice final a gente pega tudo a partir do índice inicial 

    echo '<br><br>';
    $resto = array_slice($muitos, 30);

    print_r($resto);

    
    // Vai pegar tudo menos a partir do inicial menos os útilmos 4
    echo '<br><br>';
    $negativo = array_slice($muitos, 30, -4);

    print_r($negativo);
