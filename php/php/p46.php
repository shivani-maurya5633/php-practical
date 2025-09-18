<?php
if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    $name = isset($_GET['name']) ? htmlspecialchars(trim($_GET['name'])) : '';
    $subject = isset($_GET['subject']) ? htmlspecialchars($_GET['subject']) : '';
    $message = isset($_GET['message']) ? htmlspecialchars($_GET['message']) : '';

   
    if ($name !== '') {
        echo "<h3>Thank you {$name}, we will contact you soon.</h3>";
        echo "<p><strong>Subject:</strong> {$subject}</p>";
        echo "<p><strong>Message:</strong><br>" . nl2br($message) . "</p>";
    } else {
        echo "Name missing. Please go back and enter your name.";
    }
} else {
    echo "Please submit the contact form.";
}
?>
<html>
<html>
<head><title>Contact</title></head>
<body>
  <h3>Contact Form</h3>
  
  <form action="p46.php" method="get">
    Name: <input type="text" name="name" required><br><br>
    Subject: <input type="text" name="subject" required><br><br>
    Message:<br>
    <textarea name="message" rows="5" cols="40" required></textarea><br><br>
    <button type="submit">Send</button>
  </form>
</body>
</html>