<?php

function countVowels($str)
{
    $str = strtolower($str);
    $vowelCount = 0;

    for ($i = 0; $i < strlen($str); $i++) {
        if (in_array($str[$i], ["a", "e", "i", "o", "u"])) {
            $vowelCount++;
        }
    }

    return $vowelCount;
}

// Driver code
$str = "Mihir rathod";
$vowelsCount = countVowels($str);

echo "Number of vowels: " . $vowelsCount;

?>