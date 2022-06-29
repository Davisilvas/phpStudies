<?php 

$rato ="O rato roeu a roupa do rei roma";
$letraA = 0;

for($x = 0; $x < strlen($rato); $x++){
    if($rato[$x] === 'a'){
        echo $rato[$x] . '<br>';
        $letraA++;
    }
}

echo $letraA;
?>