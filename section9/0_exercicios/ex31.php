<?php 

$palavras = ['vasco', 'time da virada', 'gigante da colina', 'vascão'];

$atribuido = implode( " - " ,$palavras);

echo $atribuido;
echo '<br>';
print_r($palavras);

// a função implode, aparentemente, é uma função que tem como objetivo imprimir o array de uma forma mais legível e entendível pra gente. O primeiro argumento dela é o que vai separar o array e o segundo é o array no qual ela vai puxar os dados.

// a função implode junta um array numa string única.