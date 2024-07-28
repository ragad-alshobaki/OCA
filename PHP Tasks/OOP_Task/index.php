<?php
class Car {
private $make;
private $model;
private $VIN;

public function __construct($make, $model, $VIN) {
$this->make = $make;
$this->model = $model;
$this->VIN = $VIN;
}

public function __destruct(){
    echo "<p style='color: red'> The car have VIN ($this->VIN) has been destroyed</p>";
}

public function getCarDetails(){
    return "The car make is $this->make and model is $this->model and have $this->VIN VIN";
}

//getter & setter for private properties:
public function getMake(){
    return $this->make;
}
public function setMake($make){
    $this->make = $make;
}

public function getModel(){
    return $this-> model;
}
public function setModel($model){
    $this-> model = $model;
}

public function getVin(){
    return $this-> VIN;
}
public function setVin($VIN){
    $this-> VIN = $VIN;
}
}

$car1 = new Car ("Toyota", "Camry", "0123");
echo "<pre>";
var_dump($car1);
echo "<pre>";
//--------------------------------------------------------------------------
class Inventory {
private $carsArr = [];

public function addCar($car){
    $this-> carsArr[] = $car;
}
}

$invCar = new Inventory();

$invCar -> addCar($car1);