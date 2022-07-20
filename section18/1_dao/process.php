<?php

    include_once("db.php"); #conexão com o Banco de dados
    include_once("dao/carDAO.php"); #através desse arquivo eu tenho acesso ao models/Car.php

    $car = new CarDAO($conn); #esse argumento é a conexão com o banco

    $name = $_POST["name"];
    $brand = $_POST["brand"];
    $description = $_POST["description"];

    $newCar = new Car();

    $newCar->setBrand($brand);
    $newCar->setName($name);
    $newCar->setDescription($description);

    $car-> create($newCar);

    header("location: index.php");