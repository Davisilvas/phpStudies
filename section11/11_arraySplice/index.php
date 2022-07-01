<?php 

// Remove elementos de um array. Passamos como parâmetro o array, índici inicial e quantos elementos queremos remover. array_splice($arr, 2, 1)
// O ARRAY ORIGINAL É MODIFICADO, MAS COM O RETORNO DO SPLICE A GENTE TEM COMO UTILIZAR ESSES ELEMENTOS QUE FORAM REMOVIDOS AINDA. (Acho que tem que atribuir).

// obviamente se você quiser apenas remover o elemento do array você não precisa atribuir a função a uma variável

    $dezena = range(1, 10);
    $dois = array_splice($dezena, 1, 1);

    print_r($dezena);
    echo '<br><br>';
    print_r($dois);
    echo '<br><br>';

    echo 'Novos testes daqui pra baixo<br><br>';

    // Se omitir o último parâmetro ele vai remover tudo a partir do ínidice indicado
    $arr = range(1,11);
    $arrRemovidos = array_splice($arr, 5);
    print_r($arr);
    echo '<br><br>';
    print_r($arrRemovidos);
    echo '<br><br>';


    echo 'Novos testes daqui pra baixo<br><br>';
    
    //indice negativo
    $arr2 = range(1,11);
    $arrRemovidos2 = array_splice($arr, 5, -3);
    print_r($arr);
    echo '<br><br>';
    print_r($arrRemovidos);
    echo '<br><br>';
    


