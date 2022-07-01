<?php 

// Para ordenar em ordem crescente podemos utilizar a função sort em um array. Para ordenar de forma inversa utilizamos a função rsort.


    $arr = [
        2, 1, 200, 345, 45, 32, 1000, 234, 908898
    ];

    print_r($arr);
    echo '<br><br>';
    
    sort($arr);
    print_r($arr);
    echo '<br><br>';
    
    rsort($arr);
    print_r($arr);
    echo '<br><br>';

// Lembrando que esse método mexe na estrutura final do array, vai reorganizar ele. Então não precisa criar uma nova variável.

// Podemos usar esse método também em arrays que não são numéricos. Ele vai organizar em ordem alfabética.

    $nomes = [
        'Davi',
        'Maria Eduarda',
        'Doly',
        'Thor',
        'Tom',
        'Mila',
       'Leona'
    ];

    print_r($nomes);
    echo '<br><br>';
    
    sort($nomes);
    print_r($nomes);
    echo '<br><br>';
    
    rsort($nomes);
    print_r($nomes);
    echo '<br><br>';