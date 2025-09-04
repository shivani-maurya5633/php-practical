<?php
$countries = [
    "India " => "New Delhi",
    "USA" => "Washington, D.C. ",
    "Japan" => "Tokyo"
]; 
echo "Original Array:\n";
print_r($countries);
$countries["Germany"] = "Berlin";
echo "\nAfter adding Germany:\n";
print_r($countries);
?>