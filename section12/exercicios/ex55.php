<?php

    class Car{
        public $maxVelocity;
        public $carName;

        function setCarName($n){
            return $this->carName = $n;
        }

        function setMaxVelocity($v){
            return $this->maxVelocity = $v;
        }

        function getMaxVelocity(){
            echo $this->maxVelocity . '<br>';
        }

        
        function getCarName(){
            echo $this->carName . '<br>';
        }

        function presentingCar(){
            echo "Este é um $this->carName e ele chega a $this->maxVelocity <br>";
        }
    }

    $brasilia = new Car;

    $brasilia -> setMaxVelocity(100);
    $brasilia -> setCarName("Brasilia");
    $brasilia -> getMaxVelocity();
    $brasilia -> getCarName();
    $brasilia -> presentingCar();