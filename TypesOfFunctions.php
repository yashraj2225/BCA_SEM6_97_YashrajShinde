<?php

//no parameters, No return value
function message() {
    echo "Function with no parameters and no return value\n";
}

//parameters, no return value
function add($a, $b) {
    $sum = $a + $b;
    echo "Sum of $a and $b = $sum\n";
}

//parameters with return value
function multiply($x, $y) {
    return $x * $y;
}

//no parameters but return value
function getNumber() {
    return 100;
}

//fn calls below
message();
add(5, 3);

$result = multiply(4, 6);
echo "Multiplication result = $result\n";

$num = getNumber();
echo "Returned number = $num\n";

?>
<!-- 
Function with no parameters and no return value
Sum of 5 and 3 = 8
Multiplication result = 24
Returned number = 100
  -->