<?php

    if(count($_POST) > 0){  #ou seja se tiver algo no post, faça:
        $validacoes = []; #cria esse array vazio

        if($_POST['nome'] === ''){
            $validacoes[] = 'Por favor, preencha o nome do usuário';
        } #se nome estiver vazio, o array recebe essa string como seu valor 

        if($_POST['email'] === ''){
            $validacoes[] = 'Por favor, preencha o seu email';
        } #se email estiver vazio, o array recebe essa string como seu valor 

        if($_POST['senha'] === ''){
            $validacoes[] = 'Por favor, preencha a sua senha';
        } 

        if($_POST['confirm'] === ''){
            $validacoes[] = 'Por favor, preencha a sua confimação de senha';
        } 

        if($_POST['senha'] != $_POST['confirm']){
            $validacoes[] = 'As senhas não coincidem!';
        } #verificando se as senhas são iguais
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <?php
        if(count($validacoes)):
    ?>
        <ul>
            <?php foreach($validacoes as $validacao): ?>
                <li> <?=$validacao?> </li>
            <?php endforeach; // repetição que percorre o array para imprimir as mensagens?> 
        </ul>
    <?php endif;?>

    <form action="index.php" method="POST">

    <input type="text" name="nome" placeholder="Digite seu nome">
    <br><br>

    <input type="email" name="email" placeholder="Digite seu email">
    <br><br>

    <input type="password" name="senha" placeholder="Digite sua senha">
    <br><br>

    <input type="password" name="confirm" placeholder="confirme sua senha">
    <br><br>

    <input type="submit" value="Enviar">

    </form>


</body>
</html>