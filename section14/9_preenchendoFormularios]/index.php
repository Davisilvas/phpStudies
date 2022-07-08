<?php

// Podemos preencher formulário com dados que vieram da requisição. E isso acontece bastante em resultados de busca ou edições de registros. 

// Podemos fazer uma checagem se o dado foi enviado e recebido para a página. e utilizar o echo para exibir no atributo value do input. 

// <input type="text" value="<?php echo $nome; ? >"

// moc de dados

    $usuario = [
        'nome' => 'Davi',
        'idade' => 21,
        'profissao' => 'Desenvolvedor'
    ];


    if(isset($usuario)){
        $nome =  $usuario['nome'];
        $idade =  $usuario['idade'];
        $profissao =  $usuario['profissao'];
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
        
        <form action="arq.php" method="POST">
            <input type="text" name="nome" value="<?php echo $nome;?>" >
            <br>
            <br>


            <input type="number" name="idade" value="<?php echo $idade;?>" >
            <br>
            <br>


            <input type="text" name="profissao" value="<?php echo $profissao;?>" >
            <br>
            <br>

            <input type="submit" value="Enviar"> <!-- Lembrando que o submit recarrega a página e o button não -->
        </form>

    </body>
    </html>