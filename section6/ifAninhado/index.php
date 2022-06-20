<?php 

    $v1 = 10;
    $v2 = 7;
    $v3 = 4;


    if($v1 > $v2){
        echo "$v1 é maior que $v2 <br>";
        if($v2 > $v3){
            echo "e o $v2 é maior que o $v3 <br>";
        }
    }

    echo "<br> <br> <br>";

    if(10 > 2){
        echo "entrou no if 1.2<br>";

        if("teste" != "teste"){
            echo "entrou no segundo if 2.2<br>";
        }else {
            echo "entrou no segundo else 2.2 <br>";
        }
    }else{
        echo "entrou no primeiro else 1.2 <br>";
    }
    
    echo "<br> <br> <br>";


    if(10 < 2){
        echo "entrou no if 1.3<br>";

        if("teste" != "teste"){
            echo "entrou no segundo if 2.3<br>";
        }else {
            echo "entrou no segundo else 2.3 <br>";
        }
    }else{
        echo "entrou no primeiro else 1.3 <br>";
    }

    //como a condição inicial é falsa, ele não executa o segundo if, pois ele tá dento do bloco de comando de caso a condição seja verdadeira.

    echo "<br> <br> <br>";


    if(10 < 2){
        echo "entrou no if 1.4<br>";

    }else{
        echo "entrou no primeiro else 1.4 <br>";

        if("teste" != "teste"){
            echo "entrou no segundo if 2.4<br>";
        }else {
            echo "entrou no segundo else 2.4 <br>";
        }
    }

    //aqui eu joguei a sengunda estrutura if pra ver que é possível ter um if aninhado dentro do else
?>