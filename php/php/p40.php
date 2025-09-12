<?php
if($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['name'])){
    $name = htmlspecialchars(trim($_POST['name']));
    echo "Welcome, $name!";
}
else{
    echo "Please submit the form.";
}
?>
<form action = "p40.php" method="post">
    Name: <input type = "text" name="name"><br>
    <button type="submit">Submit</button>

</form>