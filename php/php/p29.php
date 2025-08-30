<?php
$arr = [1,2,2,3,4,4,4,5,];
$unique =
 array_values(array_unique($arr));
echo "Original: ";
print_r($arr);
echo "After array_unique (reindexed): ";
print_r($unique);
?>