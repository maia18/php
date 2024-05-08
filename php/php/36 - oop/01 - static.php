<?php

header('Content-Type: text/plain');

class Car {
    public static string $brand = 'tesla';

    public static function drive() {
        $brand = self::$brand;
        var_dump("Car::drive has been called, {$brand}");
    }
}
/*
$bmw = new Car();
$bmw->drive();
*/

Car::drive();
var_dump(Car::$brand);


