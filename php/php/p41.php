<?php

if($_SERVER['REQUEST_METHOD'] === 'POST'){
$username=isset($_POST['username']) ?
trim($_POST['username']) : '';
$password = isset($_POST['password']) ?
trim($_POST['password']) : '';
if($username === 'Shivani' &&  $password === '12345678'){
    echo "Login successful!";
}else{
    echo "Invalid credentials.";
}
}else{
    echo "Enter your information.";
}
?>

<form action="p41.php" method="POSt">
    Username: <input type="text" name="username"><br><br>
    Password: <input type="password" name="password"><br><br>
    <button type="submit">Login</button>
</form>