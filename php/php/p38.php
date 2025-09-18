<?php
if(isset($_GET['num1']) &&
isset($_GET['num2']))
{
    $a = (float)$_GET['num1'];
    $b = (float)$_GET['num2'];
    $sum = $a + $b;
   echo "Sum of $a and $b is: $sum";
}
?>
<form action="p38.php" method="get">
Num1: <input type="number" name="num1"><br>
Num2: <input type="number" name="num2"><br>
<button type="submit">Add</button>
</form>