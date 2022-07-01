<?php 

//podemos utilizar a função range pra criar um array de forma rápida. -> range(1,10). Com isso um array de 1 a 10 é criado e podemos atribuir esse valor a uma variável.

$arr = range(1,10);
print_r($arr);
echo '<br> <br>';

$arr1 = range(4,35);
print_r($arr1);
echo '<br> <br>';

$arr2 = range(0, 1000, 100);
print_r($arr2);
echo '<br> <br>';
// vai criar um array 0 a 1000 mas com um intervalo de 100 em 100 entre os valores. Isso é o significado do terceiro argumento.

//isso aqui é uma boa solução pra quando a gente quer criar um array numérico de forma rápida.

?>