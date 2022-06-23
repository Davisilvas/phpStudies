<?php 
// TEM NADA A VER COM SHORT TAG, É UMA SIMPLES EXIBIÇÃO DE CONTEÚDO.
// SINTAXE => <?="TESTE";?_> (É SEM ESSE _)
// SERVE SIMPLESMENTE PRA COLOCAR TEXTO NA PÁGINA
// esse método não tem capacidade de guardar valores, ele funciona apenas para a exibição de algum valor. não é usado para lógica de PHP

$nome = 'Davi';



?>

<form action="">
    <input type="text" value="<?=$nome;?>">
    <div>
        <input type="submit" value="Enviar">
    </div>   
</form>