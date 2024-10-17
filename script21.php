<?php

function palindrome($n){
$number = $n;
$sum = 0;
while(floor($number)) {
$rem = $number % 10;
$sum = $sum * 10 + $rem;
$number = $number/10; 

?>