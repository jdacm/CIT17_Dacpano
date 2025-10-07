<?php
    $weight = 60;  // kg
    $height = 1.65; // meters
    $bmi = $height > 0 ? $weight / ($height * $height) : 0;
    echo "<h2>7. BMI Calculator</h2>";
    echo "Weight: {$weight}kg, Height: {$height}m<br>";
    echo "BMI: " . round($bmi, 2);
?>
