<?php
$arr = [];
for ($i = 0; $i < 10; $i++){
    $arr[$i]=$i + 1;
}
for ($i = 0; $i < 10; $i++){
    echo "Index $i => " . $arr[$i] . "<br>";
}
?>