<?php

$num = 153;
$original = $num;
$sum = 0;

while ($num > 0) {
    $digit = $num % 10;
    $sum = $sum + ($digit * $digit * $digit);
    $num = (int)($num / 10);
}

if ($sum == $original) {
    echo "$original is an Armstrong number";
} else {
    echo "$original is not an Armstrong number";
}

?>
<!-- 
153 is an Armstrong number
  -->