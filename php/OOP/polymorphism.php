<?php 
// Parent class
class Animal {
    public function makeSound() {
        echo "Animal makes a sound";
    }
}

// Child classes
class Dog extends Animal {
    public function makeSound() {
        echo "Dog barks";
    }
}

class Cat extends Animal {
    public function makeSound() {
        echo "Cat meows";
    }
}

// Create objects
$animal1 = new Dog();
$animal2 = new Cat();

// Output
$animal1->makeSound(); // Outputs: Dog barks
$animal2->makeSound(); // Outputs: Cat meows


?>
