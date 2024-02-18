<?php
class Animal {
    protected $name;

    public function __construct($name) {
        $this->name = $name;
    }

    public function eat() {
        echo "{$this->name} is eating<br>";
    }
}

class Dog extends Animal {
    public function bark() {
        echo "{$this->name} is barking<br>";
    }
}

class Cat extends Animal {
    public function meow() {
        echo "{$this->name} is meowing<br>";
    }
}

$dog = new Dog("Buddy");
$cat = new Cat("Whiskers");

$dog->eat();   // Output: Buddy is eating
$dog->bark();  // Output: Buddy is barking

$cat->meow();  // Output: Whiskers is meowing