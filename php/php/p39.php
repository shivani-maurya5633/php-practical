<?php
$marks = isset($_GET['marks']) ? (int)
$_GET['marks'] : null;
if($marks === null){
    echo "No marks provide. ";
}
else{
    echo "Marks: $marks -";
    echo ($marks >= 40) ? "PASS" : "FAIL";
}
?>