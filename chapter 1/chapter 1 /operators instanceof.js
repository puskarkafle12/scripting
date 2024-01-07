// Define a constructor function
function Car(make, model) {
    this.make = make;
    this.model = model;
}

// Create an instance of the Car constructor
var myCar = new Car('Toyota', 'Camry');

// Check if the object is an instance of the Car constructor
var isInstanceOfCar = myCar instanceof Car;

console.log(isInstanceOfCar);  // Output: true


class Animal {
    constructor(name) {
        this.name = name;
    }

    makeSound() {
        console.log('Some generic sound');
    }
}

class Dog extends Animal {
    constructor(name, breed) {
        super(name);
        this.breed = breed;
    }

    bark() {
        console.log('Woof! Woof!');
    }
}

const myDog = new Dog('Buddy', 'Golden Retriever');

console.log(myDog instanceof Dog);    // Output: true
console.log(myDog instanceof Animal); // Output: true
