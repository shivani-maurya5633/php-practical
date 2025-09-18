<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    
    $username = isset($_POST['username']) ? trim($_POST['username']) : '';
    $email = isset($_POST['email']) ? trim($_POST['email']) : '';
    $password = isset($_POST['password']) ? $_POST['password'] : '';

    
    $errors = [];
    if (empty($username)) { $errors[] = "Username is required."; }
    if (empty($email)) { $errors[] = "Email is required."; }
    if (empty($password)) { $errors[] = "Password is required."; }

    if (!empty($errors)) {
        echo "<h3>Errors:</h3><ul>";
        foreach ($errors as $e) echo "<li>" . htmlspecialchars($e) . "</li>";
        echo "</ul><p><a href='register.html'>Go back</a></p>";
        exit;
    }

    
    echo "<h3>Registration successful!</h3>";
    echo "<p>Username: " . htmlspecialchars($username) . "</p>";
    echo "<p>Email: " . htmlspecialchars($email) . "</p>";
   
} else {
    echo "Please submit the registration form.";
}
?>
<html>
<html>
<head><title>Register</title></head>
<body>
  <h3>User Registration</h3>
  <form action="p47.php" method="post">
    Username: <input type="text" name="username"><br><br>
    Email: <input type="email" name="email"><br><br>
    Password: <input type="password" name="password"><br><br>
    <button type="submit">Register</button>
  </form>
</body>
</html>