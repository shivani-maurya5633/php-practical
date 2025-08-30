<?php
$arr = [1,2,3,4,5,6];
$reversed = [];
for ($i = count($arr)-1; $i >= 0; $i--)
{
    $reversed[] = $arr[$i];
}
echo "Original: ";
print_r($arr);
echo "Reversed (manual loop): ";
print_r($reversed);
?>