<?php 
// Parent class
class Shape {
    protected $name;
    
    public function __construct($name) {
        $this->name = $name;
    }

    public function calculateArea() {
        // To be implemented by subclasses
    }
}

// Subclasses
class Circle extends Shape {
    private $radius;

    public function __construct($name, $radius) {
        parent::__construct($name);
        $this->radius = $radius;
    }

    public function calculateArea() {
        return pi() * $this->radius * $this->radius;
    }
}

class Rectangle extends Shape {
    private $length;
    private $width;

    public function __construct($name, $length, $width) {
        parent::__construct($name);
        $this->length = $length;
        $this->width = $width;
    }

    public function calculateArea() {
        return $this->length * $this->width;
    }
}

// Usage
$shapes = [
    new Circle("Circle", 5),
    new Rectangle("Rectangle", 4, 6)
];

foreach ($shapes as $shape) {
    echo "The area of " . $shape->name . " is " . $shape->calculateArea() . "\n";
}
?>