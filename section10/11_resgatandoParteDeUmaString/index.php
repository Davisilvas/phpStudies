<?php 
// olhar SLIDE 166

//podemos usar ela pra receber uma nova parte da string como retorno da função.

$str = 'String do davizão';
$davizao = substr($str, 10, 8); # O ÍNDICE COMEÇA DO 0

echo $str . '<br>';
echo $davizao . '<br>';
echo ucfirst($davizao) . '<br>'; #exemplo de manipulação de palavra resgatada de uma string.

// 1- ela não remove o conteúdo da string original, ela permanece intacta 
// 2 - a função pega só a partir do indive que a gente indicar.
// SINTAXE -> primeiro parâmetro é a string fonte do conteúdo que a gente quer pegar, segundo parâmetro é o índice de início da palavra que a gente quer pegar. E o terceiro são QUANTOS caracteres a gente vai pegar a partir desse índice.


$parametroOmitido = substr($str, 7);
echo $parametroOmitido . '<br>';

//OS ESPAÇOS VALEM PARA A CONTAGEM. LETRA ACENTUADA CONTA COMO DOIS CARACTERES

// quando a gente só informa o índice de início e deixa de informar quantos caracteres pegar, a função vai pegar o resto inteiro da string a partir daquele índice indicado. 

// se a gente passar como negativo o último parâmetro, ele vai contar do último índice eliminar esses caracteres que a gente tirou indicando o valor negativo.

$negativo = substr($str, 0, -8);
echo $negativo . '<br>';

?>