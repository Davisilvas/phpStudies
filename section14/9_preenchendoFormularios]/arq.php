<?php

    print_r($_POST);

    // $arr = $_POST['$usuario[]'];

    $poste = $_POST;
    $arr = $poste['usuario'];
    $nome = $arr['nome'];
    $idade = $arr['idade'];
    $profissao = $arr['profissao'];

    // <h1> O seu nome é <?=$arr['nome']? >, sua idade é <?=$arr['idade']? > e sua profissão é <?=$arr['profissao']? ></h1>
?>

<h1> O seu nome é <?=$nome['nome']?>, sua idade é <?=$idade['idade']?> e sua profissão é <?=$profissao['profissao']?></h1>