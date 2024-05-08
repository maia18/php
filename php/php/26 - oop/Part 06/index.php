<?php

header('Content-Type: text/plain');

interface Car {
    public function drive();
}

class FuelCar implements Car {
    public function drive() {
        echo "The car is driving and consuming fuel.";
    }
}

class ElectricCar implements Car {
    public function drive() {
        echo "The car is driving and using electricity.";
    }
}

function transport(Car $car) {
    $car->drive();
}

$fuelCar = new FuelCar();
transport($fuelCar);

$electricCar = new ElectricCar();
transport($electricCar);
