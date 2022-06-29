<?php

//podemos converter uma string em array com a função explode. Passamos primeiro o separador como argumento e depois a string que vai ser convertida.
// o separador é o que há entre uma palavra e outra. numa frase normal normalmente o separador é o espaço como veremos abaixo.

$vasco = 'Clube de Regatas Vasco Da Gama';
$exp = explode(' ', $vasco);

print_r($exp);
echo '<br>';

//abaixo vou passar um separador que não existe na frase. Com isso a função não acha o separador e não separa nada. Gerando assim um array de um índice só com a frase inteira nele.

$exp2 = explode('-', $vasco);

print_r($exp2);
echo '<br>';


for($i = 0; $i < count($exp); $i++){
    echo $exp[$i] . '<br>';
}
