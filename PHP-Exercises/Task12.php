<?php
    $distance = 150;        // km
    $fuel_consumption = 12; // km per liter
    $fuel_price = 65;       // per liter
    $fuel_needed = $fuel_consumption > 0 ? $distance / $fuel_consumption : 0;
    $travel_cost = $fuel_needed * $fuel_price;
    echo "<h2>12. Travel Cost Estimator</h2>";
    echo "Distance: {$distance} km<br>";
    echo "Estimated Fuel Needed: " . round($fuel_needed, 2) . " L<br>";
    echo "Estimated Travel Cost: ₱" . number_format($travel_cost, 2);
?>
