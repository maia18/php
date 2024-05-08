<?php
header('Content-Type: text/plain');

class Animal {
    public function move() {
        echo "Animal::move() has been called\n";
    }
    public function eat() {
        echo "Animal::eat() has been called\n";
        self::move();
    }
}
class Dog extends Animal {
    public function move() {
        echo "Dog::move() has been called\n";
        parent::move();
    }
}

$dog = new Dog();
$dog->eat();
