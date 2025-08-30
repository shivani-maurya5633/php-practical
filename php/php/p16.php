<?php
echo "<h4>for loop</h4>";
 for ($i = 1; $i <= 30; $i++){
    echo $i . " ";
 }

    echo "<h4>while loop</h4>";
    $i = 1;
    while ($i <= 30){
        echo $i . " ";
        $i++;
    }

    echo "<h4>do-while loop</h4>";
    $i = 1;
    do {
        echo $i . " ";
        $i++;
 } while ($i <= 30);
?>

