<?php 

//podemos imprimir valores de forma dinâmica utilizando o símbolo%

$nome ='Davi';
printf("O meu nome é %s <br>", $nome);
echo '<br>';
//a ideia é que a gente passe argumentos que vão representar os parãmetros da função. $s significa string.

// %s -> string
// %d -> int
// %f -> float - limitar números de casa do float - %.2f lembrando que isso aq pode arredondar o valor 

$tempo = 15.67;

printf("Hoje está fazendo %.1f graus celcius", $tempo);#arredonda
echo '<br>';
printf("Hoje está fazendo %.2f graus celcius", $tempo);#não arredonda


?>