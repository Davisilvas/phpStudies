<?php

    function teste($a, $s){
        $r = $a + $s;
        return $r;
    }

    // include "../2_chamandoUmaFuncao/index.php";
    
    // echo '<br>' . $reusltado;

    //Se você puxar as coisas de um ouotro arquivo, tem que lembrar que tudo que tá acontecendo nele, vai acontecer nesse. Por exemplo, no arquivo anterior ele estava imprimindo 3 coisas que eu não queria que fossem impressas aqui, eu queria só a função e as variáveis dele. Tendo isso em mente temos que tomar cuidado com o que a gente puxa de fora. Se queremos as funções, dados, variáveis, temos que ver se é só isso mesmo que tá no arquivo.


    echo 'O resultado da soma entre 5 e 6 é: ' . teste(5,6);
    