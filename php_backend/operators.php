<?php
$num1 = 10;
$num2 = 5;

// Arithmetic Operators
$sum = $num1 + $num2;
$difference = $num1 - $num2;
$product = $num1 * $num2;
$quotient = $num1 / $num2;
$remainder = $num1 % $num2;

// Output results
echo "Sum: " . $sum . "<br>";
echo "Difference: " . $difference . "<br>";
echo "Product: " . $product . "<br>";
echo "Quotient: " . $quotient . "<br>";
echo "Remainder: " . $remainder . "<br>";

// Assignment operator: =
$a = 10;
echo "Initial value of a: $a\n"; // Output: 10

// Addition assignment operator: +=
$a += 5; // Equivalent to $a = $a + 5;
echo "After += 5, value of a: $a\n"; // Output: 15

// Subtraction assignment operator: -=
$a -= 3; // Equivalent to $a = $a - 3;
echo "After -= 3, value of a: $a\n"; // Output: 12

// Multiplication assignment operator: *=
$a *= 2; // Equivalent to $a = $a * 2;
echo "After *= 2, value of a: $a\n"; // Output: 24

// Division assignment operator: /=
$a /= 4; // Equivalent to $a = $a / 4;
echo "After /= 4, value of a: $a\n"; // Output: 6

// Comparison Operators
$result = ($num1 > $num2); // true
var_dump($result);
echo "<br>";

// Logical Operators
$is_true = true;
$is_false = false;
$logical_and = $is_true && $is_false; // false
$logical_or = $is_true || $is_false; // true
$logical_not = !$is_true; // false

var_dump($logical_and);
echo "<br>";
var_dump($logical_or);
echo "<br>";
var_dump($logical_not);
?>
