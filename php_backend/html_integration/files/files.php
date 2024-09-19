<?php
    //reading of a file
    echo readfile("example.txt");
    // Writing to a file
    $file = fopen("example1.txt", "w") or die("Unable to open file!");
    $txt = "Durga\n";
    fwrite($file, $txt);
    $txt = "Prasad\n";
    fwrite($file, $txt);
    fclose($file);
    
    // Reading from a file
    $file = fopen("example.txt", "r") or die("Unable to open file!");
    while (!feof($file)) {
        echo fgets($file) . "<br>";
    }
    fclose($file);
?>
