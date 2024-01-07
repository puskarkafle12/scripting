
ChatGPT
Arrays in JavaScript come with a variety of built-in methods that allow you to manipulate and interact with array elements. Here's a list of some commonly used methods for the array object:

concat:

Combines two or more arrays.
javascript
Copy code
var array1 = [1, 2, 3];
var array2 = [4, 5, 6];
var newArray = array1.concat(array2);
join:

Joins all elements of an array into a string.
javascript
Copy code
var fruits = ['apple', 'banana', 'orange'];
var result = fruits.join(', '); // Output: 'apple, banana, orange'
push:

Adds one or more elements to the end of an array and returns the new length.
javascript
Copy code
var numbers = [1, 2, 3];
var newLength = numbers.push(4, 5);
pop:

Removes the last element from an array and returns that element.
javascript
Copy code
var numbers = [1, 2, 3, 4];
var removedElement = numbers.pop(); // Output: 4
shift:

Removes the first element from an array and returns that element.
javascript
Copy code
var numbers = [1, 2, 3, 4];
var removedElement = numbers.shift(); // Output: 1
unshift:

Adds one or more elements to the beginning of an array and returns the new length.
javascript
Copy code
var numbers = [2, 3, 4];
var newLength = numbers.unshift(1);
indexOf:

Returns the index of the first occurrence of a specified value in an array.
javascript
Copy code
var numbers = [1, 2, 3, 4];
var index = numbers.indexOf(3); // Output: 2
slice:

Returns a shallow copy of a portion of an array into a new array.
javascript
Copy code
var numbers = [1, 2, 3, 4, 5];
var slicedArray = numbers.slice(2, 4); // Output: [3, 4]
splice:

Changes the contents of an array by removing or replacing existing elements.
javascript
Copy code
var numbers = [1, 2, 3, 4, 5];
numbers.splice(2, 2, 6, 7); // Removes 2 elements starting from index 2 and adds 6, 7
forEach:

Executes a provided function once for each array element.
javascript
Copy code
var numbers = [1, 2, 3];
numbers.forEach(function(number) {
    console.log(number);
});
// Output:
// 1
// 2
// 3
