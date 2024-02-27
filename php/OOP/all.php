<?php
// Define a class
class Animal {
    // Property
    public $name;

    // Constructor
    public function __construct($name) {
        $this->name = $name;
    }

    // Method
    public function eat() {
        echo "{$this->name} is eating.<br>";
    }
}

// Inheritance
class Dog extends Animal {
    // Method overriding
    public function eat() {
        echo "{$this->name} the dog is eating dog food.<br>";
    }

    // Static property
    public static $classification = 'Mammal';
}

// Create objects
$animal = new Animal('Generic Animal');
$dog = new Dog('Buddy');

// Access property
echo $animal->name . '<br>'; // Generic Animal

// Call method
$animal->eat(); // Generic Animal is eating.
$dog->eat();    // Buddy the dog is eating dog food.

// Access static property
echo Dog::$classification; // Canine
?>
