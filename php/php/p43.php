<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['lang']) && $_POST['lang'] !== '') {
        $lang = htmlspecialchars($_POST['lang']);
        echo "<h3>Your selected language: {$lang}</h3>";
    } else {
        echo "<h3>No language selected. Please go back and choose one.</h3>";
    }
} else {
 
    echo '<p>Please open <a href="p43.html">p43.html</a> and submit the form.</p>';
}
?>
<html>
<html>
<head><title>Favourite Language</title></head>
<body>
  <h3>Which is your favorite programming language?</h3>
  <form action="p43.php" method="post">
    <label><input type="radio" name="lang" value="PHP"> PHP</label><br>
    <label><input type="radio" name="lang" value="JavaScript"> JavaScript</label><br>
    <label><input type="radio" name="lang" value="Python"> Python</label><br><br>
    <button type="submit">Submit</button>
  </form>
</body>
</html>