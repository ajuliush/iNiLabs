<?php

class Animal {
    protected $name;
    
    public function __construct($name) {
        $this->name = $name;
    }
    
    public function makeSound() {
        // Default sound for an unknown animal
        echo "{$this->name} makes a generic sound.<br>";
    }
}

class Dog extends Animal {
    public function makeSound() {
        echo "{$this->name} barks Woof Woof!<br>";
    }
}

class Cat extends Animal {
    public function makeSound() {
        echo "{$this->name} meows Meow Meow!<br>";
    }
}

class Cow extends Animal {
    public function makeSound() {
        echo "{$this->name} moos Moo Moo!<br>";
    }
}

// Creating instances of animal classes
$dog = new Dog("Lallu");
$cat = new Cat("Tom");
$cow = new Cow("Kala");

// Demonstrating polymorphism
$animals = [$dog, $cat, $cow];

foreach ($animals as $animal) {
    $animal->makeSound();
}
