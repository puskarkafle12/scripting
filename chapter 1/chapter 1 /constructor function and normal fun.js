// Constructor Function
function PersonConstructor(name) {
    this.name = name;
}

var personInstance = new PersonConstructor('John');
console.log(personInstance);  // Output: PersonConstructor { name: 'John' }

// Normal Function
function greet(name) {
    console.log('Hello, ' + name);
}

 greet('Alice');
