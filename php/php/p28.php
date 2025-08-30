<?php
$fruits = ["apple", "banana", "mango", "orange"];
$search = "mango";
if (in_array($search, $fruits)) {
    echo "$search found in array\n";
}else{
    echo "$search Not found\n";
}

?>