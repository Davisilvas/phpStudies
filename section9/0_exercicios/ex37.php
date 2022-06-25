<?php


    function defineCorCarro($carro, $cor = 'Vermelho'){
        echo "A cor do $carro é $cor <br>";
        return $cor;
    }

    $carreto = defineCorCarro('Fiat Argo');
    echo $carreto . '<br>';
    defineCorCarro('Renault Kwid', 'Azul chumbo');
    defineCorCarro('Fiat Argo');
