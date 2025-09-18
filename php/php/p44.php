<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    
    $name_param = urlencode($name);
    header("Location: p44.php?name={$name_param}");
    exit;
} else {
    echo "<b>Please submit the feedback form.</b>";
}
?>
<?php
$name = isset($_GET['name']) ?
htmlspecialchars($_GET['name']) :
'Student';
echo "<h2>Thank you, {$name}! Your feedback has been submitted.</h2>";
?>
<html>
<html>
<head><title>Feedback</title></head>
<body>
  <h>Feedback Form</h><br><br>
  <form action="p44.php" method="post">
    Name: <input type="text" name="name" required><br><br>
    Email: <input type="email" name="email" required><br><br>
    Message:<br>
    <textarea name="message" rows="6" cols="40" required></textarea><br><br>
    <button type="submit">Submit Feedback</button>
  </form>
</body>
</html>