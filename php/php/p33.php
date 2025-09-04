<?php
$students = [
     "Aman" => 85,
      "Ravi" => 78,
      "SIta"=> 92
];
$key = "Ravi";
   if (array_key_exists($key, $students)){
    echo "key '$key' exists in the array.\n";
   }else{
    echo "key 'key' does Not exist in the array.\n";
   }
?>