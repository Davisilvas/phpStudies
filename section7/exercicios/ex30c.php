<?php 

$numeros = [];

// for($i =10; $i <= 20; $i++){
//     if($i % 2 !=0){
//         array_push($numeros, $i);
//     }
// }

// print_r($numeros);

for($i =10; $i <= 20; $i++){
    array_push($numeros, $i);
}
print_r($numeros);

echo '<br><br>';

for($i =0; $i <= count($numeros); $i++){
    if($numeros[$i] %2 != 0){
        echo "Número impar: $numeros[$i] <br>";
    }
}




?>