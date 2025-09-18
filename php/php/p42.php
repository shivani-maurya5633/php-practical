<?php
$result = '';
if($_SERVER['REQUEST_METHOD'] === 'POST'){
  $a = (float)($_POST['a'] ?? 0);
  $b = (float)($_POST['b'] ?? 0);
  $op = $_POST['op'] ?? '+';

  switch($op){
    case '+': $result = $a + $b; break;
    case '-': $result = $a - $b; break;
    case '*': $result = $a * $b; break;
    case '/': $result = $b != 0 ? $a / $b : 'Division by zero'; break;
    default: $result = 'Unknown operation';
  }
}
?>
<form method="post">
  <input type="number" name="a" step="any" required> 
  <select name="op">
    <option value="+">+</option>
    <option value="-">-</option>
    <option value="*">*</option>
    <option value="/">/</option>
  </select>
  <input type="number" name="b" step="any" required>
  <button type="submit">Calculate</button>
</form>

<?php if($result !== '') echo "<h3>Result: $result</h3>"; ?>