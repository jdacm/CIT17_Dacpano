<?php
function task1() {
    $name = "Kevin Dacpano";
    $age = 20;
    $favorite_color = "black";
    $hobby = "watching";
    echo "<h2>1. Introduce Yourself</h2>";
    echo "Hi, I’m $name. I am $age years old. My hobby is $hobby, and my favorite color is $favorite_color.";
}

function task2() {
    $a = 10;
    $b = 5;
    echo "<h2>2. Simple Math</h2>";
    echo "a = $a, b = $b<br>";
    echo "Sum: " . ($a + $b) . "<br>";
    echo "Difference: " . ($a - $b) . "<br>";
    echo "Product: " . ($a * $b) . "<br>";
    echo "Quotient: " . ($b != 0 ? ($a / $b) : 'Division by zero') . "<br>";
}

function task3() {
    $length = 8;
    $width = 4;
    $area = $length * $width;
    $perimeter = 2 * ($length + $width);
    echo "<h2>3. Area & Perimeter</h2>";
    echo "Length: $length, Width: $width<br>";
    echo "Area: $area<br>Perimeter: $perimeter";
}

function task4() {
    $celsius = 30;
    $fahrenheit = ($celsius * 9/5) + 32;
    echo "<h2>4. Temperature Converter</h2>";
    echo "$celsius °C = $fahrenheit °F";
}

function task5() {
    $x = 15;
    $y = 25;
    $temp = $x;
    $x = $y;
    $y = $temp;
    echo "<h2>5. Swapping Variables</h2>";
    echo "After swapping: x = $x, y = $y";
}

function task6() {
    $basic_salary = 15000;
    $allowance = 5000;
    $deduction = 3000;
    $net_salary = $basic_salary + $allowance - $deduction;
    echo "<h2>6. Salary Calculator</h2>";
    echo "Net Salary: ₱" . number_format($net_salary, 2);
}

function task7() {
    $weight = 60;  // kg
    $height = 1.65; // meters
    $bmi = $height > 0 ? $weight / ($height * $height) : 0;
    echo "<h2>7. BMI Calculator</h2>";
    echo "Weight: {$weight}kg, Height: {$height}m<br>";
    echo "BMI: " . round($bmi, 2);
}

function task8() {
    $sentence = "PHP is fun to learn!";
    echo "<h2>8. String Manipulation</h2>";
    echo "Sentence: \"$sentence\"<br>";
    echo "Characters: " . strlen($sentence) . "<br>";
    echo "Words: " . str_word_count($sentence) . "<br>";
    echo "Uppercase: " . strtoupper($sentence) . "<br>";
    echo "Lowercase: " . strtolower($sentence);
}

function task9() {
    $balance = 5000;
    $deposit = 2000;
    $withdraw = 1000;
    $balance += $deposit;
    $balance -= $withdraw;
    echo "<h2>9. Bank Account Simulation</h2>";
    echo "Final Balance: ₱" . number_format($balance,2);
}

function task10() {
    $math = 85;
    $english = 92;
    $science = 88;
    $average = ($math + $english + $science) / 3;
    if ($average >= 90) $grade = "A";
    elseif ($average >= 80) $grade = "B";
    elseif ($average >= 70) $grade = "C";
    elseif ($average >= 60) $grade = "D";
    else $grade = "F";
    echo "<h2>10. Simple Grading System</h2>";
    echo "Average: " . round($average,2) . "<br>Grade: $grade";
}

function task11() {
    $php = 1000;
    $usd_rate = 0.018;
    $eur_rate = 0.017;
    $jpy_rate = 2.7;
    echo "<h2>11. Currency Converter</h2>";
    echo "PHP $php = " . number_format($php * $usd_rate, 2) . " USD<br>";
    echo "PHP $php = " . number_format($php * $eur_rate, 2) . " EUR<br>";
    echo "PHP $php = " . number_format($php * $jpy_rate, 2) . " JPY";
}

function task12() {
    $distance = 150;        // km
    $fuel_consumption = 12; // km per liter
    $fuel_price = 65;       // per liter
    $fuel_needed = $fuel_consumption > 0 ? $distance / $fuel_consumption : 0;
    $travel_cost = $fuel_needed * $fuel_price;
    echo "<h2>12. Travel Cost Estimator</h2>";
    echo "Distance: {$distance} km<br>";
    echo "Estimated Fuel Needed: " . round($fuel_needed, 2) . " L<br>";
    echo "Estimated Travel Cost: ₱" . number_format($travel_cost, 2);
}

$task = isset($_GET['task']) ? intval($_GET['task']) : 1;
?>
<!doctype html>
<html>
<head><meta charset="utf-8"><title>PHP Exercises - XAMPP</title></head>
<body>
<h1>PHP Exercises (XAMPP)</h1>
<nav>
<?php for ($i=1;$i<=12;$i++): ?>
    <a href="?task=<?php echo $i; ?>">Task <?php echo $i; ?></a><?php if($i<12) echo " | "; ?>
<?php endfor; ?>
</nav>
<hr>
<div>
<?php
switch($task) {
    case 1: task1(); break;
    case 2: task2(); break;
    case 3: task3(); break;
    case 4: task4(); break;
    case 5: task5(); break;
    case 6: task6(); break;
    case 7: task7(); break;
    case 8: task8(); break;
    case 9: task9(); break;
    case 10: task10(); break;
    case 11: task11(); break;
    case 12: task12(); break;
    default: task1(); 
}
?>
</div>
</body>
</html>
