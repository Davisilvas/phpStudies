<?php 

if(5 > 7 || "teste" === "teste"){ #false - true
    echo 'op1 deu certo';
}

echo '<br>';echo '<br>';echo '<br>';
if (4 > 3 || 'teste' === 7){ #true - false
    echo 'op2 deu certo';
}

echo '<br>';echo '<br>';echo '<br>';
if(4 > 3 || 3 > 2){ # true - true
    echo 'op3 deu certo';
}

echo '<br>';echo '<br>';echo '<br>';
if (44 > 100 || 100 > 1000){ #false - false
    echo 'op4 deu certo';
}

?>