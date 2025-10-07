<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP Basic Tasks</title>
  <link rel="stylesheet" href="styles.css">
</head>
<body>
  <div class="container">
    <h1>PHP Exercises</h1>
    <div class="buttons">
      <?php
        $tasks = [
          "Task 1: Introduce Yourself",
          "Task 2: Simple Math",
          "Task 3: Area and Perimeter of a Rectangle",
          "Task 4: Temperature Converter",
          "Task 5: Swapping Variables",
          "Task 6: Salary Calculator",
          "Task 7: BMI Calculator",
          "Task 8: String Manipulation",
          "Task 9: Bank Account Simulation",
          "Task 10: Simple Grading System",
          "Task 11: Currency Converter",
          "Task 12: Travel Cost Estimator"
        ];

        for ($i = 0; $i < count($tasks); $i++) {
          $taskNumber = $i + 1;
          echo "<a href='task$taskNumber.php' class='btn'>{$tasks[$i]}</a>";
        }
      ?>
    </div>
  </div>
</body>
</html>
