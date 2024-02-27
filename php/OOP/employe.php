<?php
class Employee {
    // Properties
    public $name;
    public $age;
    public $jobTitle;
    public $salary;

    // Constructor
    public function __construct($name, $age, $jobTitle, $salary) {
        $this->name = $name;
        $this->age = $age;
        $this->jobTitle = $jobTitle;
        $this->salary = $salary;
    }

    // Method to work
    public function work() {
        echo $this->name . " is working.\n";
    }

    // Method to take a break
    public function takeBreak() {
        echo $this->name . " is taking a break.\n";
    }

    // Method to attend a meeting
    public function attendMeeting() {
        echo $this->name . " is attending a meeting.\n";
    }
}

// Create instances of the Employee class
$employee1 = new Employee("John Doe", 30, "Software Engineer", 60000);
$employee2 = new Employee("Jane Smith", 35, "Product Manager", 80000);

// Call methods on the objects
$employee1->work(); // Output: John Doe is working.
$employee2->attendMeeting(); // Output: Jane Smith is attending a meeting.
?>