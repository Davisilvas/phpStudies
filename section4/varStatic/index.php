<?php 


    function teste(){
        $a = 0;
        $a++;
        echo "$a <br>";
    }

    teste();
    teste();
    teste();

    echo '<br>';

    function testeStatic(){
        static $a = 0;
        $a++;
        echo "$a <br>";
    }

    #como aqui o valor é mantido, ele sempre é incrementado.
    testeStatic();
    testeStatic();
    testeStatic();

?>