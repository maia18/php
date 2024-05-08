<?php
header('Content-Type: text/plain');

class Animal {
    public function __construct(public int $weight) {}
    public function move() {
        echo "Animal::move() has been called\n";
    }
    public function eat() {
        echo "Animal::eat() has been called ({$this->weight})\n";
    }
}
class Dog extends Animal {
    /*
    public function __construct() {
        // $this->weight = 30;
        parent::__construct(30);
    }
    */
    public function __construct(public string $breed, $weight) {
        echo "A new dog is born\n";
        parent::__construct($weight);
    }
    public function bark() {
        echo "Dog::bark() has been called (breed: {$this->breed})\n";
    }
    public function move() {
        echo "Dog::move() has been called\n";
    }
}

$dog = new Dog('Golden Retriever', 30);
$dog->move();
$dog->bark();
$dog->eat();