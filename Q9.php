<?php

$size = 8;

echo "<table border='1' cellspacing='0' cellpadding='20'>";

for ($i = 0; $i < $size; $i++) {
    echo "<tr>";
    
    for ($j = 0; $j < $size; $j++) {
        
        if (($i + $j) % 2 == 0) {
            echo "<td style='background-color:black;'></td>";
        } else {
            echo "<td style='background-color:white;'></td>";
        }

    }

    echo "</tr>";
}

echo "</table>";

?>