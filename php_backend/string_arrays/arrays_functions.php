<?php
    // Pushing elements
    $fruits = array("Apple", "Banana");
    array_push($fruits, "Cherry");
    echo "After pushing: " . implode(", ", $fruits) . "<br>";

    // Popping element
    $last_fruit = array_pop($fruits);
    echo "Popped element: " . $last_fruit . "<br>";

    // Merging arrays
    $array1 = array("a" => "Red", "b" => "Green");
    $array2 = array("c" => "Blue", "d" => "Yellow");
    $merged_array = array_merge($array1, $array2);
    echo "Merged array: ";
    print_r($merged_array);
    echo "<br>";

    // Sorting array
    $numbers = array(4, 2, 8, 5);
    sort($numbers);
    echo "Sorted array: " . implode(", ", $numbers) . "<br>";
?>
