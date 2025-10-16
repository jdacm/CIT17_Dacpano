<?php
$task = isset($_GET['task']) ? $_GET['task'] : '1';
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>PHP Tasks with Forms</title>
<link rel="stylesheet" href="styles.css">
</head>
<body>

<header>
    <h1>PHP Exercises with Forms</h1>
</header>

<nav>
    <a href="?task=1" class="<?= $task == 1 ? 'active' : '' ?>">Task 1: Introduce Yourself</a>
    <a href="?task=2" class="<?= $task == 2 ? 'active' : '' ?>">Task 2: Simple Math</a>
    <a href="?task=3" class="<?= $task == 3 ? 'active' : '' ?>">Task 3: Rectangle Area & Perimeter</a>
    <a href="?task=4" class="<?= $task == 4 ? 'active' : '' ?>">Task 4: Temperature Converter</a>
    <a href="?task=5" class="<?= $task == 5 ? 'active' : '' ?>">Task 5: Swap Variables</a>
    <a href="?task=6" class="<?= $task == 6 ? 'active' : '' ?>">Task 6: Salary Calculator</a>
    <a href="?task=7" class="<?= $task == 7 ? 'active' : '' ?>">Task 7: BMI Calculator</a>
    <a href="?task=8" class="<?= $task == 8 ? 'active' : '' ?>">Task 8: String Manipulation</a>
    <a href="?task=9" class="<?= $task == 9 ? 'active' : '' ?>">Task 9: Bank Account Simulation</a>
    <a href="?task=10" class="<?= $task == 10 ? 'active' : '' ?>">Task 10: Grading System</a>
    <a href="?task=11" class="<?= $task == 11 ? 'active' : '' ?>">Task 11: Currency Converter</a>
    <a href="?task=12" class="<?= $task == 12 ? 'active' : '' ?>">Task 12: Travel Cost Estimator</a>
</nav>

<div class="container">
<?php
switch ($task) {
    case 1:
        echo "<h2>Task 1: Introduce Yourself</h2>";
        echo '<form method="post">
                Name: <input type="text" name="name" required><br>
                Age: <input type="number" name="age" required><br>
                Favorite Color: <input type="text" name="color" required><br>
                <button type="submit" name="submit1">Submit</button>
              </form>';
        if (isset($_POST['submit1'])) {
            echo "<p>Hi, I’m {$_POST['name']}, I am {$_POST['age']} years old, and my favorite color is {$_POST['color']}.</p>";
        }
        break;

    case 2:
        echo "<h2>Task 2: Simple Math</h2>";
        echo '<form method="post">
                Number A: <input type="number" name="a" required><br>
                Number B: <input type="number" name="b" required><br>
                <button type="submit" name="submit2">Calculate</button>
              </form>';
        if (isset($_POST['submit2'])) {
            $a = $_POST['a']; $b = $_POST['b'];
            echo "<p>Sum: " . ($a + $b) . "</p>";
            echo "<p>Difference: " . ($a - $b) . "</p>";
            echo "<p>Product: " . ($a * $b) . "</p>";
            echo "<p>Quotient: " . ($b != 0 ? $a / $b : 'undefined') . "</p>";
        }
        break;

    case 3:
        echo "<h2>Task 3: Rectangle Area & Perimeter</h2>";
        echo '<form method="post">
                Length: <input type="number" name="length" step="0.01" required><br>
                Width: <input type="number" name="width" step="0.01" required><br>
                <button type="submit" name="submit3">Compute</button>
              </form>';
        if (isset($_POST['submit3'])) {
            $l = $_POST['length']; $w = $_POST['width'];
            echo "<p>Area: " . ($l * $w) . "</p>";
            echo "<p>Perimeter: " . (2 * ($l + $w)) . "</p>";
        }
        break;

    case 4:
        echo "<h2>Task 4: Temperature Converter (C → F)</h2>";
        echo '<form method="post">
                Celsius: <input type="number" name="celsius" step="0.1" required><br>
                <button type="submit" name="submit4">Convert</button>
              </form>';
        if (isset($_POST['submit4'])) {
            $c = $_POST['celsius'];
            $f = ($c * 9/5) + 32;
            echo "<p>$c °C = $f °F</p>";
        }
        break;

    case 5:
        echo "<h2>Task 5: Swap Variables</h2>";
        echo '<form method="post">
                Value A: <input type="text" name="a" required><br>
                Value B: <input type="text" name="b" required><br>
                <button type="submit" name="submit5">Swap</button>
              </form>';
        if (isset($_POST['submit5'])) {
            $a = $_POST['a']; $b = $_POST['b'];
            $temp = $a;
            $a = $b;
            $b = $temp;
            echo "<p>After swapping: A = $a, B = $b</p>";
        }
        break;

    case 6:
        echo "<h2>Task 6: Salary Calculator</h2>";
        echo '<form method="post">
                Basic Salary: <input type="number" name="basic" step="0.01" required><br>
                Allowance: <input type="number" name="allowance" step="0.01" required><br>
                Deduction: <input type="number" name="deduction" step="0.01" required><br>
                <button type="submit" name="submit6">Compute</button>
              </form>';
        if (isset($_POST['submit6'])) {
            $net = $_POST['basic'] + $_POST['allowance'] - $_POST['deduction'];
            echo "<p>Net Salary: ₱" . number_format($net, 2) . "</p>";
        }
        break;

    case 7:
        echo "<h2>Task 7: BMI Calculator</h2>";
        echo '<form method="post">
                Weight (kg): <input type="number" name="weight" step="0.1" required><br>
                Height (m): <input type="number" name="height" step="0.01" required><br>
                <button type="submit" name="submit7">Calculate</button>
              </form>';
        if (isset($_POST['submit7'])) {
            $bmi = $_POST['weight'] / ($_POST['height'] ** 2);
            echo "<p>Your BMI: " . number_format($bmi, 2) . "</p>";
        }
        break;

    case 8:
        echo "<h2>Task 8: String Manipulation</h2>";
        echo '<form method="post">
                Sentence: <input type="text" name="sentence" required><br>
                <button type="submit" name="submit8">Analyze</button>
              </form>';
        if (isset($_POST['submit8'])) {
            $s = $_POST['sentence'];
            echo "<p>Characters: " . strlen($s) . "</p>";
            echo "<p>Words: " . str_word_count($s) . "</p>";
            echo "<p>Uppercase: " . strtoupper($s) . "</p>";
            echo "<p>Lowercase: " . strtolower($s) . "</p>";
        }
        break;

    case 9:
        echo "<h2>Task 9: Bank Account Simulation</h2>";
        echo '<form method="post">
                Balance: <input type="number" name="balance" step="0.01" required><br>
                Deposit: <input type="number" name="deposit" step="0.01" required><br>
                Withdraw: <input type="number" name="withdraw" step="0.01" required><br>
                <button type="submit" name="submit9">Update</button>
              </form>';
        if (isset($_POST['submit9'])) {
            $balance = $_POST['balance'] + $_POST['deposit'] - $_POST['withdraw'];
            echo "<p>Updated Balance: ₱" . number_format($balance, 2) . "</p>";
        }
        break;

    case 10:
        echo "<h2>Task 10: Grading System</h2>";
        echo '<form method="post">
                Math: <input type="number" name="math" required><br>
                English: <input type="number" name="eng" required><br>
                Science: <input type="number" name="sci" required><br>
                <button type="submit" name="submit10">Compute</button>
              </form>';
        if (isset($_POST['submit10'])) {
            $avg = ($_POST['math'] + $_POST['eng'] + $_POST['sci']) / 3;
            if ($avg >= 90) $grade = 'A';
            elseif ($avg >= 80) $grade = 'B';
            elseif ($avg >= 70) $grade = 'C';
            elseif ($avg >= 60) $grade = 'D';
            else $grade = 'F';
            echo "<p>Average: " . number_format($avg, 2) . " | Grade: $grade</p>";
        }
        break;

    case 11:
        echo "<h2>Task 11: Currency Converter (PHP → USD, EUR, JPY)</h2>";
        echo '<form method="post">
                Amount in PHP: <input type="number" name="php" step="0.01" required><br>
                <button type="submit" name="submit11">Convert</button>
              </form>';
        if (isset($_POST['submit11'])) {
            $php = $_POST['php'];
            $usd = $php / 58;
            $eur = $php / 63;
            $jpy = $php / 0.40;
            echo "<p>₱$php = $" . number_format($usd, 2) . " USD</p>";
            echo "<p>₱$php = €" . number_format($eur, 2) . " EUR</p>";
            echo "<p>₱$php = ¥" . number_format($jpy, 2) . " JPY</p>";
        }
        break;

    case 12:
        echo "<h2>Task 12: Travel Cost Estimator</h2>";
        echo '<form method="post">
                Distance (km): <input type="number" name="distance" step="0.1" required><br>
                Fuel Consumption (km/L): <input type="number" name="fuel" step="0.1" required><br>
                Fuel Price (₱/L): <input type="number" name="price" step="0.1" required><br>
                <button type="submit" name="submit12">Estimate</button>
              </form>';
        if (isset($_POST['submit12'])) {
            $liters = $_POST['distance'] / $_POST['fuel'];
            $cost = $liters * $_POST['price'];
            echo "<p>Estimated Travel Cost: ₱" . number_format($cost, 2) . "</p>";
        }
        break;

    default:
        echo "<p>Select a task from above.</p>";
}
?>
</div>

</body>
</html>
