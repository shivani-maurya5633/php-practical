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
    echo "Please login form.";
}
?>

<form action="p41.php" method="POSt">
    Username: <input type="text" name="username"><br>
    Password: <input type="password" name="password"><br>
    <button type="submit">Login</button>
</form>