<?php
//strlen() function returns the length of a string.
$length = "Durga Prasad";
echo "Length of string is: ". strlen($length)."</br>";







 //str_word_count() function counts the number of words in a string.
$word_count = "Durga Prasad J";
echo "The words count is: ". str_word_count($word_count)."</br>";






//Searching (strpos): Finds the position of the first occurrence of a substring within a string
$string = "Durga Prasad Jyothula";
$pos = strpos($string, "Prasad"); // 13
echo $pos."</br>";




// //PHP - Modify Strings
// strtoupper() function returns the string in upper case:
$upper_case = "Durga Prasad!";
echo "strtoupper()-". strtoupper($upper_case)."</br>";

//strtolower() function returns the string in lower case:
$lower_case = "Durga Prasad!";
echo "strtolower()-".strtolower($lower_case)."</br>";

//	Replacing (str_replace): Replaces all occurrences of a substring with another substring in a string.
$string = "Durga Prasad";
$new_string = str_replace("Prasad", "J", $string); // "Durga PHP"
echo $new_string."</br>";





//strrev() function reverses a string.
$reverse = "Durga Prasad!";
echo strrev($reverse)."</br>";






//trim() removes any whitespace from the beginning or the end:
$trim = " Durga Prasad! ";
echo trim($trim)."</br>";




//explode() function splits a string into an array.
//The first parameter of the explode() function represents the "separator". The "separator" specifies where to split the string.
$x = "Durga&Prasad!Jyothula";
$y = explode("&", $x);
//Use the print_r() function to display the result:
print_r($y);
echo "</br>";
// /*
// // Result:
// // Array ( [0] => Durga [1] => Prasad! )
// // */

//	Concatenation (.): Combines two strings into one.
$string1 = "Durga";
$string2 = "Prasad";
$result = $string1 . " " . $string2; // "Durga Prasad"
echo $result."</br>";
echo "$string1 $string2"."</br>";
 

// //PHP - Slicing Strings
// //	Substring (substr): Extracts a portion of a string/
// $string = "Durga Prasad Jyothula"; 
// $substring1 = substr($string, 6); //it will print the values after 6 index position
// echo $substring1."</br>";  // "Prasad Jyothula"
// $substring2 = substr($string, 6, 8); // it will print the values after 6 index position and ends after 6 positions later
// echo $substring2."</br>"; // "Prasad"
// //negative length
// $substring3 = substr($string, -8);
// echo $substring3."</br>";
?>