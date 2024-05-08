<?php
header('Content-Type: text/plain');

abstract class Animal {
    abstract protected function getWeight(): int;

    public function move() {
        echo "Animal::move() has been called\n";
    }
    public function eat() {
        $weight = $this->getWeight();
        echo "Animal::eat() has been called, weight: {$weight}\n";
    }
}
class Dog extends Animal {
    protected function getWeight(): int {
        return 40;
    }
}

$dog = new Dog();
$dog->eat();


class Cat extends Animal {
    protected function getWeight(): int {
        return 20;
    }
}
$cat = new Cat();
$cat->eat();
