<?php 

    $davi = ['nome' => 'Davi',
    'idade' => 21,
    'escolaridade' => 'cursando o superior',
    'senioridade' => 'Jr'];

    $doly = ['nome' => 'Doly',
    'idade' => 12,
    'escolaridade' => 'sou um au au eu não estudo',
    'senioridade' => 'meu único trabalho é comer e brincar no quintal'];
    

    print_r($davi);
    echo '<br>';
    echo '<br>';

    $nome = $davi['nome'];
    $idade = $davi['idade'];
    $escolaridade = $davi['escolaridade'];
    $senioridade = $davi['senioridade'];

    if ($idade > 18){
        echo "Olá meu nome é $nome e eu tenho $idade anos. Atualmente eu estou $escolaridade e na programação meu nível atual é $senioridade.";
    }else{
        echo 'Sou menor de idade e não vou me apresentar a um estranho!';
    }

    echo '<br>';
    echo '<br>';

    print_r($doly);
    echo '<br>';
    echo '<br>';

    $nome2 = $doly['nome'];
    $idade2 = $doly['idade'];
    $escolaridade2 = $doly['escolaridade'];
    $senioridade2 = $doly['senioridade'];

    if ($idade2 > 18){
        echo "Olá meu nome é $nome2 e eu tenho $idade2 anos. Atualmente eu estou $escolaridade2 e na programação meu nível atual é $senioridade2.";
    }else{
        echo 'Sou menor de idade e não vou me apresentar a um estranho!';
    }




?>