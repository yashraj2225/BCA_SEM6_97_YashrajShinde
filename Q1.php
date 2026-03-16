<?php

$numbers = array(10, 45, 23, 89, 67, 12);
$largest = $numbers[0];
$length = 6;

for ($i = 1; $i < $length; $i++) {
    if ($numbers[$i] > $largest) {
        $largest = $numbers[$i];
    }
}

echo "Largest number is: " . $largest;
?>
<!-- 
Largest number is: 89
  -->