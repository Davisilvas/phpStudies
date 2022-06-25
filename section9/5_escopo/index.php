<?php 

    $a = 10;
    $b = 12;

    echo "ESCOPO GLOBAL DE B $b <br>";

    function teste (){
        $a = 20;
        global $b;
        static $c = 0;

        $b++;
        $c++;

        echo "ESCOPO LOCAL DA FUNÇÃO DE A $a <BR>";
        echo "ESCOPO GLOBAL INSERIDO NA FUNÇÃO DE B $b <br>";
        echo "ESCOPO LOCAL E STATIC DA FUNÇÃO DE C $c <BR>";
    };

    teste();

    echo "ESCOPO GLOBAL DE A $a <br>";
    echo "ESCOPO GLOBAL DE B $b APÓS A MANIPULAÇÃO NA FUNÇÃO <br>";

    teste();

    echo "ESCOPO GLOBAL DE B $b APÓS A MANIPULAÇÃO NA FUNÇÃO 2<br>";
?>  