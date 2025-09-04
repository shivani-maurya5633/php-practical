<?php
$students = [
      "Aman" => 85,
      "Ravi" => 78,
      "SIta"=> 92
];
echo "Original Marks:\n";
print_r($students);
$students["ravi"]= 88;
echo "\nAfter Updating Ravi's Marks:\n";
print_r($students);
?>