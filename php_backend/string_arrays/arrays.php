<?php
$myArr = array("DP", 25, ["apples", "bananas"],"array_fun");
function array_fun() {
    echo "This is array function";
  }
// calling the function from the array item:
print_r($myArr[3]());
echo "</br>";

//count() function for counting array items:
$students = array("Raju","Ravi","Ramu","Venkat") ;
echo count($students) ."</br>";
//To add items to an existing array, you can use the bracket [] syntax
$students[] = "DP";
print_r($students);
echo "</br>";
echo count($students) ."</br>";


// Indexed array
$users = array("User_1", 26, true, 22.4, "User_2", 22, false, 30.2);
var_dump($users);
echo "</br>";
//To access an array item you can refer to the index number.
echo "First user: " . $users[0] . "<br>";
//To change the value of an array item, use the index number:
$users[0] = "changed_user";
var_dump($users);
echo "</br>";
echo "First user: " . $users[0] . "<br>";
echo "</br>";
//To loop through and print all the values of an indexed array, you could use a foreach loop
foreach ($users as $output) {
  echo "$output <br>";
}
echo "</br>";



// Associative array
$students = array("name" => "DP", "roll_num" => 1234, "branch" => "CSE");
var_dump($students);
echo "</br>";
//To access an array item you can refer to the key name.
echo "Name: " . $students["roll_num"] . "<br>";
//To add items to an associative array, or key/value array, use brackets [] for the key, and assign value with the = operator.
$students["college"] = "Qis";
echo "Added college name: " . $students["college"] . "<br>";
//To change the value of an array item, use the key name:
$students["roll_num"] = 7890;
echo "changed number: " . $students["roll_num"] . "<br>";
//To loop through and print all the values of an associative array, you can use a foreach loop
foreach ($students as $key => $value) {
    echo "$key : $value <br>";
  }


// Multidimensional array
$products = array(
    array("name" => "Laptop", "price" => 1000),
    array("name" => "Phone", "price" => 500)
);
echo "Product: " . $products[0]["name"] . ", Price: $" . $products[0]["price"] . "<br>";

?>