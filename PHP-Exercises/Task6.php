<?php
    $basic_salary = 15000;
    $allowance = 5000;
    $deduction = 3000;
    $net_salary = $basic_salary + $allowance - $deduction;
    echo "<h2>6. Salary Calculator</h2>";
    echo "Net Salary: ₱" . number_format($net_salary, 2);
?>
