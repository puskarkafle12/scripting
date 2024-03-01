<?php 
class Animal {
    public function eat() {
        echo "Animal is eating.<br>";
    }
}

class Dog extends Animal {
    public function bark() {
        echo "Dog is barking.";
    }
}

$dog = new Dog();
$dog->eat();  // Outputs: Animal is eating.
$dog->bark(); // Outputs: Dog is barking.
?>