<?php
    $sentence = "PHP is fun to learn!";
    echo "<h2>8. String Manipulation</h2>";
    echo "Sentence: \"$sentence\"<br>";
    echo "Characters: " . strlen($sentence) . "<br>";
    echo "Words: " . str_word_count($sentence) . "<br>";
    echo "Uppercase: " . strtoupper($sentence) . "<br>";
    echo "Lowercase: " . strtolower($sentence);
?>
