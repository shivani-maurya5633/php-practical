<?php
$arr = [3, 1, 4, 1, 5, 9];

echo "Original:\n";
print_r($arr);

// sort() - ascending, reindexes
$a = $arr;
sort($a);
echo "\nsort() (ascending, reindexed):\n";
print_r($a);

// rsort() - descending, reindexes
$b = $arr;
rsort($b);
echo "\nrsort() (descending, reindexed):\n";
print_r($b);

// asort() - ascending by value, preserves keys
$c = $arr;
asort($c);
echo "\nasort() (ascending, preserve keys):\n";
print_r($c);

// arsort() - descending by value, preserves keys
$d = $arr;
arsort($d);
echo "\narsort() (descending, preserve keys):\n";
print_r($d);

// ksort() and krsort() - sort by keys (useful for associative arrays)
$assoc = ["b"=>2, "a"=>5, "c"=>1];
echo "\nOriginal assoc:\n";
print_r($assoc);

$ka = $assoc;
ksort($ka);
echo "\nksort() (by key ascending):\n";
print_r($ka);

$kr = $assoc;
krsort($kr);
echo "\nkrsort() (by key descending):\n";
print_r($kr);
?>