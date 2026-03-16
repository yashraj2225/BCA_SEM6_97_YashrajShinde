<?php

$num = 7;
$isPrime = true;

if ($num <= 1) {
    $isPrime = false;
}

for ($i = 2; $i < $num; $i++) {
    if ($num % $i == 0) {
        $isPrime = false;
        break;
    }
}

if ($isPrime) {
    echo "$num is a Prime Number";
} else {
    echo "$num is not a Prime Number";
}

?>