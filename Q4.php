<?php

$n = 10;  

$a = 0;
$b = 1;

echo "Fibonacci Series: ";

for ($i = 1; $i <= $n; $i++) {
    echo $a . " ";
    
    $next = $a + $b;
    $a = $b;
    $b = $next;
}

?>
<!-- 
Fibonacci Series: 0 1 1 2 3 5 8 13 21 34 
  -->