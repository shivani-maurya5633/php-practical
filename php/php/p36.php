<?php
$name = isset($_GET['name'])?
htmlspecialchars($_GET['name']) :
"Guest";
echo "Hello, $name";
?>