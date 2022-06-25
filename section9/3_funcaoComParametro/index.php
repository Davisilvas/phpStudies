<?php 

// se a gente passar um parâmetro que a função não exige, o php vai simplesmente ignorar ele e executar o código normalmente.


//checagem de erro
function velMax($vel){
    if(is_int($vel)){
        echo "o carro é capaz de chegar a $vel km/h <br>";
    }else{
        echo 'por favor insira um valor inteiro para $vel <br>';
    }
}

function raca($nome, $raca){
    if(is_string($nome) && is_string($raca)){
        echo "o nome do doguinho é $nome e a raça dele é $raca <br>";
    }elseif(is_string($nome) == false && is_string($raca) == false){
        echo 'ambos os valores não são string, por favor insira strings';
    }elseif(is_string($nome) == false){
        echo 'por favor insira uma string para $nome <br>';
    }elseif(is_string($raca) == false){
        echo 'insira uma string para $raca <br>';
    }
}

velMax(500);

velMax('tazmania');

raca('banguela', 'shitzu');

raca(1, 'aaa');

raca('banguela', 1);

raca(1, 1);


?>