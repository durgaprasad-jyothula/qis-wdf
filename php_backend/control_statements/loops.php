<?php
    // Array of fruits
    $fruits = array("Apple", "Banana", "Cherry");
    count($fruits);
    // for loop
    echo "Using for loop:<br>";
    for ($i = 0; $i < count($fruits); $i++) {
        echo $fruits[$i] . "<br>";
    }
    
    // while loop
    echo "<br>Using while loop:<br>";
    $j = 0;
    while ($j < count($fruits)) {
        echo $fruits[$j] . "<br>";
        $j++;
    }

    // foreach loop
    echo "<br>Using foreach loop:<br>";
    foreach ($fruits as $fruit) {
        echo $fruit . "<br>";
    }
?>
