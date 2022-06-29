<?php

$lista = 'carro - navio - helicóptero - barco - jangada';

$listaE = explode('-', $lista);

print_r($listaE);
echo '<br>';

for($i = 0; $i < count($listaE); $i++){
    echo $listaE[$i] . 'Vasco <br>';
}