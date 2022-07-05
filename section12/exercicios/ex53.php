<?php


    class Cachorro{
        function bark(){
            echo "roof roof roof <br>";
        }

        function walk($case){
            echo "I'm walking $case cases towards <br>" ;
        }
    }

    $doly = new Cachorro;
    $thor = new Cachorro;

    $doly->bark();
    $doly->walk(5);

    $doly->bark();
    $doly->walk(6);
