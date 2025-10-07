<?php
    $balance = 5000;
    $deposit = 2000;
    $withdraw = 1000;
    $balance += $deposit;
    $balance -= $withdraw;
    echo "<h2>9. Bank Account Simulation</h2>";
    echo "Final Balance: ₱" . number_format($balance,2);
?>
