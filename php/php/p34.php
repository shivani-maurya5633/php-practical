<?php
$fruits = [
    "Banana" => 50,
    "Apple"  => 120,
    "Mango"  => 80,
    "Orange" => 70
];

echo "Original Array:\n";
print_r($fruits);

asort($fruits);
echo "\nSorted by values (asort):\n";
print_r($fruits);
ksort($fruits);
echo "\nSorted by keys (ksort):\n";
print_r($fruits);
?>