<?php
$name = isset($_GET['name']) ?
htmlspecialchars($_GET['name']) :
"Guest";
$age = isset($_GET['age']) ? (int)
$_GET['age'] : "unknown";
echo "Hay $name, you are $age years old.";
?>