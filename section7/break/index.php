<?php  

$x = 0;

while ($x < 10){

    echo "O x é $x <br>";

    if ($x === 5){
        echo "encerrando o while <br>";
        break;
    }

    $x++;
}

?>