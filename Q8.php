<?php

$marks = 88;   

if ($marks >= 90 && $marks <= 100) {
    echo "Grade: A";
}
else if ($marks >= 80 && $marks<=89) {
    echo "Grade: B";
}
else if ($marks >= 70&& $marks<=79) {
    echo "Grade: C";
}
else if ($marks >= 60&& $marks<=69) {
    echo "Grade: D";
}
else {
    echo "Grade: F";
}

?>
<!-- 
Grade: B
  -->