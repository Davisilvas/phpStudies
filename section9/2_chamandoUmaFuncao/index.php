<?php

    function soma($v1, $v2){
        $r = $v1 + $v2;
        return $r;
    }

    $a = 40;
    $b = 5;
    $texto = 'O resultado dessa soma é: ';
    $reusltado = soma($a, $b);

    echo $texto . $reusltado;


//função nativa

echo '<br><br>';
echo strtoupper('testando esse troço');