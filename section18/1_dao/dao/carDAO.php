<?php

include_once("models/Car.php");

class CarDAO implements CarDAOInterface{

    private $conn;
    public function __construct(PDO $conn){
        $this->conn = $conn;
    }
    
    public function findAll(){
        $cars = [];
        
        $stmt = $this->conn->query("SELECT * FROM cars");

        $data = $stmt->fetchAll();

        foreach($data as $item){
            $car = new Car();
            $car->setId($item["id"]);
            $car->setName($item["name"]);
            $car->setDescription($item["description"]);
            $car->setBrand ($item["brand"]);

            $cars[] = $car;
        }

        return $cars;
    }

    public function create(Car $car){
        
        $stmt = $this->conn->prepare("INSERT INTO cars(name, description, brand) VALUES (:name, :description, :brand)");

        $stmt->bindParam(":name", $car->getName());
        $stmt->bindParam(":description", $car->getDescription());
        $stmt->bindParam(":brand", $car->getBrand());

        $stmt->execute();

    }

}