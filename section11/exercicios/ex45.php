<?php


$init = range(10, 45);

for($i = 0; $i < count($init); $i++){
    $soma = $init[$i] + 6;
    if($soma > 30){
        echo $soma . ' O número é alto demais. <br>';
    }else{
        echo $soma . '<br>';
    }
}