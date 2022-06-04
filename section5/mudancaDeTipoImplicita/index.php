<?php 

    #float
    echo 5.5;

    echo '<br>';

    #operador de concatenação.
    #note que entre os valores a serem concatenados, deve haver um espaço até o operador de concatenação.
    echo 5 . 5;
    echo '<br>';echo '<br>';echo '<br>';

    #dois ints que vão gerar um float
    echo 5/2;

    echo '<br>';

    if(is_float(5/2)){
        echo 'essa divisão de ints gerou um float!!';
    }
    echo '<br>';echo '<br>';
    if (is_string(4 . 4)){
        echo 'é uma string em';
    }

    echo '<br>';echo '<br>';echo '<br>';
    #armazenando strings em variável para concatenar.
    $nome = 'Davi';
    $sobrenome = 'Santos';
    $fullName = $nome . ' ' . $sobrenome;
    echo $fullName;

?>