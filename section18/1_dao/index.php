<?php 

include_once("db.php");
include_once("dao/carDAO.php");

$carDao = new CarDAO($conn);

$cars =  $carDao->findAll();

?>

<h1>Insira um carro:</h1>
<form action="process.php" method="POST">

    <div>
        <label for="nome">Nome do carro:</label>
        <input type="text" name="name" placeholder="Insira o nome">
    </div>
    <div>
        <label for="brand">Marca do carro:</label>
        <input type="text" name="brand" placeholder="Insira a marca">
    </div>
    <div>
        <label for="description">Descrição do carro:</label>
        <input type="text" name="description" placeholder="Insira a descrição">
    </div>
    <input type="submit" value="Salvar">
</form>
<br>
<ul>
    <?php foreach($cars as $car): ?>

        <li><?=$car->getName()?> - ><?=$car->getBrand()?> - ><?=$car->getDescription()?></li>

    <?php endforeach; ?>
</ul>