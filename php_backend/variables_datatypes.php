<?php
// String: Sequence of characters
$stringVar = "Hello, World!";

// Integer: Whole numbers
$integerVar = 42;

// Float: Numbers with decimal points
$floatVar = 3.14159;

// Boolean: true or false
$booleanVar = true;

// Array: Collection of values (PHP arrays are indexed arrays)
$arrayVar = array("Apple", "Banana", "Cherry");

// Associative Array: Collection of key-value pairs
$assocArrayVar = array(
    "first_name" => "John",
    "last_name" => "Doe",
    "age" => 25
);

//objects
	// Create a new stdClass object
	$obj = new stdClass;

	// Assign properties
	$obj->name = "Ramu";
	$obj->age = 30;

	


// Object: Instances of user-defined classes
// class User {
//     public $name;
//     public $email;

//     public function __construct($name, $email) {
//         $this->name = $name;
//         $this->email = $email;
//     }

//     public function getUserInfo() {
//         return "Name: " . $this->name . ", Email: " . $this->email;
//     }
// }

// // Create an instance of the User class
// $userVar = new User("Alice", "alice@example.com");

// Output the variables
echo "String: " . $stringVar . "</br>";
echo "Integer: " . $integerVar . "</br>";
echo "Float: " . $floatVar . "</br>";
echo "Boolean: " . ($booleanVar ? 'true' : 'false') . "</br>";
echo "Array: ";
print_r($arrayVar);
echo "Associative Array: ";
print_r($assocArrayVar);
// echo "Object: " . $userVar->getUserInfo() . "\n";
// Access properties
echo "Name: " . $obj->name . "</br>";
echo "Age: " . $obj->age . "</br>";
?>
