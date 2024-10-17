<?php 

function isLeapYear($year) {
    if (($year % 4 == 0 && $year % 100 != 0) 
        || ($year % 400 == 0)) {
        return true;
    } else {
        return false;
    }
}
$year = 2024;

if (isLeapYear($year)) {
    echo "Leap Year";
} else {
    echo "Not a Leap Year";
}
?>