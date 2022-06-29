<?php 

//podemos percorrer cada um dos caracteres de uma string através de uma estrutura de repetição.


$variavel = 'Variável vasco Vasco variável';

//pode-se usar funções tipo count e strlen pra fazer o contador como foi aqui.
for($x = 0; $x < strlen($variavel); $x++){
echo "{$variavel[$x]} <br>";
}

?>