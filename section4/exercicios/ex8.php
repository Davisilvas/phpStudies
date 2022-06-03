<?php 

$nome = 'Davi';
$idade = 21;
$altura = 1.85;
$maiorDeIdade = $idade > 18;

if($maiorDeIdade == true){
    echo "Olá meu nome é $nome e eu tenho $idade anos. Eu me considero alto pois eu tenho $altura de altura.";
}else{
    echo "você é menor de idade pois tem $idade anos";
}


?>