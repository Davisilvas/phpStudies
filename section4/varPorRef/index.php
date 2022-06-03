<?php 
    #var por referência. =&

    #exemplo básico, se mudar o valor de x, muda y tbm pois ocupam o mesmo espaço na memória.
    $x = 70 + 50 +30;
    $y =& $x;
    echo "$y <br>";
    echo $x;
    #se eu trocar o valor de y o valor de x também é alterado.

?>