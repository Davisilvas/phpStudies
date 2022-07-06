<?php 

// Datas que foram criadas com o objeto DateTime podem ser comparadas utilizando os operadores de comparação
// operadores como >, <, ou ==;
// $dataA > $dataB;
// a gente vai ver se uma data tá no futuro da outra.  a que tá no futuro é 'maior'

    $atual = new DateTime();
    $igual = new DateTime();
    $futuro = new DateTime();

    $futuro -> setDate(2030, 01, 01);
    $igual -> setDate(2030, 01, 01);


    if($futuro > $atual){
        echo 'Futuro é maior que atual <br>';
    }else{
        echo 'Entrou no Else! <br>';
    }
    echo '<br>';
    echo '<br>';

    if($igual == $atual){
        echo 'As datas são iguais! <br>';
    }else{
        echo 'As datas não são iguais! <br>';
    } 
    // Isso aqui não vai dar igual pela pequena diferença na execução do código que a gente vai ter. Uma é setada milésimos antes da outra, por isso não é igual. Pra gente ter duas exatamente iguais a gente tem que forçar isso.   
    echo '<br>';
    echo '<br>';

    if($futuro < $atual){
        echo 'futuro é maior que atual <br>';
    }else{
        echo 'Entrou no Else! <br>';
    }
    echo '<br>';
    echo '<br>';


    // datas forçadas a serem iguais então retronam true!
    if($igual == $futuro){
        echo 'As datas são iguais! <br>';
    }else{
        echo 'As datas não são iguais! <br>';
    } 
