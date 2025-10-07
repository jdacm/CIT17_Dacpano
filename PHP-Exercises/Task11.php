<?php
    $php = 1000;
    $usd_rate = 0.018;
    $eur_rate = 0.017;
    $jpy_rate = 2.7;
    echo "<h2>11. Currency Converter</h2>";
    echo "PHP $php = " . number_format($php * $usd_rate, 2) . " USD<br>";
    echo "PHP $php = " . number_format($php * $eur_rate, 2) . " EUR<br>";
    echo "PHP $php = " . number_format($php * $jpy_rate, 2) . " JPY";

?>
