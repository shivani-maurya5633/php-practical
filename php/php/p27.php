<?php
$nums = [42, 7, 19, 3, 100];
$asc = $nums; 
sort($asc);
echo "Ascending (sort): ";
print_r($asc);


$dec = $nums; 
rsort($dec);
echo "Decending (rsort): ";
print_r($dec);
?>