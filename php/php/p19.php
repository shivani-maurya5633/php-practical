<?php
$name = "XYZ";
$subjects = ["Sub1", "Sub2", "Sub3", "Sub4", "Sub5"];
$maxPerSubject = 50;
$obtained = [40, 30, 45, 48, 34]; 

$totalMax = $maxPerSubject * count($subjects);
$totalObtained = array_sum($obtained);
$percentage = ($totalObtained / $totalMax) * 100;

if ($percentage >= 75) {
    $result = "With Distinction";
} elseif ($percentage >= 60) {
    $result = "First Division";
} elseif ($percentage >= 45) {
    $result = "Second Division";
} elseif ($percentage >= 33) {
    $result = "Passed";
} else {
    $result = "Failed";
}
?>

<html>
<head>
<title>Marksheet</title>
<style>
  body { font-family: Arial, sans-serif; padding: 20px; }
  .card { width: 420px; border: 2px solid #333; border-radius: 8px; padding: 10px; }
  .title { text-align:center; font-weight:bold; margin-bottom:8px; }
  table { width:100%; border-collapse: collapse; }
  th, td { border:1px solid #999; padding:8px; text-align:center; }
  tfoot td { font-weight:bold; }
</style>
</head>
<body>
  <div class="card">
    <div class="title">Name : <?php echo htmlspecialchars($name); ?></div>
    <table>
      <thead>
        <tr>
          <th>Subject Name</th>
          <th>Max Marks</th>
          <th>Obtained Marks</th>
        </tr>
      </thead>
      <tbody>
        <?php foreach ($subjects as $idx => $sub): ?>
          <tr>
            <td><?php echo $sub; ?></td>
            <td><?php echo $maxPerSubject; ?></td>
            <td><?php echo $obtained[$idx]; ?></td>
          </tr>
        <?php endforeach; ?>
      </tbody>
      <tfoot>
        <tr>
          <td>Total</td>
          <td><?php echo $totalMax; ?></td>
          <td><?php echo $totalObtained; ?></td>
        </tr>
        <tr>
          <td>Percentage</td>
          <td colspan="2"><?php echo number_format($percentage, 1); ?></td>
        </tr>
        <tr>
          <td>Result</td>
          <td colspan="2">
            <?php echo ($percentage >= 33) ? "Passed/Failed | " . $result : "Failed"; ?>
          </td>
        </tr>
      </tfoot>
    </table>
  </div>
</body>
</html>