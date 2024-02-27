<?php
class Car {
    // Properties
    public $make;
    public $model;
    public $year;

    // Constructor
    public function __construct($make, $model, $year) {
        $this->make = $make;
        $this->model = $model;
        $this->year = $year;
    }

    // Method
    public function display() {
        echo "This is a {$this->year} {$this->make} {$this->model}.";
    }
}

// Creating an object
$myCar = new Car("Toyota", "Corolla", 2022);

// Accessing properties
echo $myCar->make; // Outputs: Toyota

// Calling a method
$myCar->display(); // Outputs: This is a 2022 Toyota Corolla.
?>
