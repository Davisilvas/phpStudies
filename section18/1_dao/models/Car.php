<?php

    class Car {
         
        # Foram criadas privadas pois todas elas serão alteradas via métodos.
        private $id;
        private $name;
        private $brand;
        private $description;

        #id
        public function getId(){
            return $this->id;
        }

        public function setId($id){
            $this->id = $id;
        }

        #name
        public function getName(){
            return $this->name;
        }

        public function setName($name){
            $this->name = $name;
        }

        #brand
        public function getBrand(){
            return $this->brand;
        }

        public function setBrand($brand){
            $this->brand = $brand;
        }

        #description
        public function getDescription(){
            return $this->description;
        }

        public function setDescription($description){
            $this->description = $description;
        }
    }

    interface CarDAOInterface{

        public function create(Car $car);
        public function findAll();

    }