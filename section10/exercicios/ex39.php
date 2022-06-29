<?php 

$arr = [
    'porta' => 100,
    'maçaneta' => 5,
    'motor' => 2000,
    'retrovisor' => 8
];

function itensCaros($arr){
  
    $caros =[];
    
    // chave e => valor da chave. Acho que isso só funciona pra array associativo.
    // $item ta criando o associativo e o $preço criando o valor daquele "índice".
    foreach($arr as $item => $preco){
        if($preco > 10){
            array_push($caros, $item);
        }
    }
    return $caros;   
}

$caros2 = itensCaros($arr);
print_r($caros2);

?>