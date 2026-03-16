<?php
$a = 36;
$b = 60;
echo $a." ".$b;
while ($b != 0) {
    $temp = $b;
    $b = $a % $b;
    $a = $temp;
}

echo "\nHCF is: " . $a;
?>
<!-- 
36 60
HCF is: 12
  -->