<?php
class Person {
    private $name;
    private $age;

    public function __construct($name, $age) {
        $this->name = $name;
        $this->age = $age;
    }

    public function getName() {
        return $this->name;
    }

    public function getAge() {
        return $this->age;
    }

    public function setName($name) {
        $this->name = $name;
    }

    public function setAge($age) {
        $this->age = $age;
    }
}

$person = new Person("John", 30);
echo "Name: " . $person->getName() . "<br>";
echo "Age: " . $person->getAge() . "<br>";

$person->setName("Jane");
$person->setAge(25);

echo "Name: " . $person->getName() . "<br>";
echo "Age: " . $person->getAge() . "<br>";
?>