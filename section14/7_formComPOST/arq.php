<?php


// <div>
// <input type="checkbox" name="caracteristicas[]" value="calvo"> Calvo
// </div> POR CONTA DESTE 'array' NO FINAL DO NAME, ELE CRIOU UM ARRAY DENTRO DO ARRAY DAS PROPRIEDADES DE $_POST

    print_r($_POST);
    $nome = $_POST['nome'];
    $idade = $_POST['idade'];
    $carac = $_POST['caracteristicas'];


?>

<P>Nome cadastrado: <?= $nome ?> </P>
<P>Idade cadastrada: <?= $idade?></P>
<P>Características cadastradas: <?= $carac[0]?> e <?= $carac[1]?></P>