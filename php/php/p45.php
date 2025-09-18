<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    
    $answers = [
        'q1' => 'Hyper Text Markup Language',
        'q2' => 'PHP',
        'q3' => 'React'
    ];
    $score = 0;
    $total = count($answers);

    foreach ($answers as $q => $correct) {
        if (isset($_POST[$q]) && $_POST[$q] === $correct) {
            $score++;
        }
    }
    echo "<h3>Your Score: {$score} / {$total}</h3>";
    
    echo "<ul>";
    foreach ($answers as $q => $correct) {
        $given = isset($_POST[$q]) ? htmlspecialchars($_POST[$q]) : 'No answer';
        $status = ($given === $correct) ? 'Correct' : 'Incorrect';
        echo "<li>{$q}: Your answer: {$given} — <strong>{$status}</strong> (Correct: {$correct})</li>";
    }
    echo "</ul>";
} else {
    echo "Please take the quiz first.";
}
?>
<html>
<html>
<head><title>Online Quiz</title></head>
<body>
  <h3>Quiz (3 questions)</h3>
  <form action="p45.php" method="post">
     HTML stands for?<br>
    <label><input type="radio" name="q1" value="Hyper Text Markup Language"> Hyper Text Markup Language</label><br>
    <label><input type="radio" name="q1" value="Home Tool Markup Language"> Home Tool Markup Language</label><br><br>

     Which language is server-side scripting?<br>
    <label><input type="radio" name="q2" value="PHP"> PHP</label><br>
    <label><input type="radio" name="q2" value="CSS"> CSS</label><br><br>

     Which one is a JavaScript framework?<br>
    <label><input type="radio" name="q3" value="React"> React</label><br>
    <label><input type="radio" name="q3" value="SQL"> SQL</label><br><br>

    <button type="submit">Submit Quiz</button>
  </form>
</body>
</html>
