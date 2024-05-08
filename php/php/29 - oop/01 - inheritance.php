<?php
header('Content-Type: text/plain');

class Animal {
    public function move() {
        echo "Animal::move() has been called\n";
    }
    public function eat() {
        echo "Animal::eat() has been called\n";
    }
}

class Dog extends Animal {
    public function bark() {
        echo "Dog::bark() has been called\n";
    }
    #[\Override]
    public function move() {
        echo "Dog::move() has been called\n";
    }
}

$animal = new Animal();
$animal->move();
// $animal->bark();

$dog = new Dog();
$dog->move();
$dog->bark();

/*
var_dump($animal);
var_dump($dog);
*/