<?php 

function mult($a, $b, $c){
    $result = $a * $b * $c;
    return $result;
    // o que uma função retorna é o dado que ela joga pra fora ao fim da sua execução.
}

function teste($a, $b, $c){
    $result = $a * $b * $c;

    echo $result;
}

function nome($nome, $sobrenome){
    echo $nome . ' ' . $sobrenome . '<br>';

}


$v1 = 5;
$v2 = 3;
$v3 = 2;
$nome = 'Davi';
$sobrenome = 'Silva Santos';



echo mult($v1, $v2, $v3);
echo '<br>';
teste($v1, $v2, $v3);
echo '<br>';
nome($nome, $sobrenome);

?>