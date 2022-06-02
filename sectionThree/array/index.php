<?php 

    $pessoas = ['Davi', 'Maria', 'Doly', 'Thor'];

    #para imprimir um array em tela o echo não funciona, deve-se usar o comando print_r().

    print_r($pessoas);
    
    echo '<br>';

    echo $pessoas[1];
    #pra pegar um valor específico do array pode usar o echo

    echo '<br>';
    $varios = ['Davi', 11111, true];
    print_r($varios);
?>