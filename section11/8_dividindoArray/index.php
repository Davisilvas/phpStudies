<?php 

// Podemos dividir um array grande em diversos arrays de números de elementos iguais.
// Para isso é utilizado a função array_chunk
//passamos o array como argumento e também o número de elementos que cada array deve ter.
// Cria um array multidimensional com vários elementos


$arr1 = range(1, 30);

print_r(array_chunk($arr1, 15));
echo '<br>';
echo '<br>';


$arrays = array_chunk($arr1, 10);
print_r($arrays);
echo '<br>';
echo '<br>';

for($i = 0; $i < count($arrays); $i++){
    echo 'Aqui é uma parte da chunk ' . ($i + 1) . '<br>';

    for($x = 0; $x < count($arrays[$i]); $x++){
        echo $arrays[$i][$x] . '<br>';
    }
}