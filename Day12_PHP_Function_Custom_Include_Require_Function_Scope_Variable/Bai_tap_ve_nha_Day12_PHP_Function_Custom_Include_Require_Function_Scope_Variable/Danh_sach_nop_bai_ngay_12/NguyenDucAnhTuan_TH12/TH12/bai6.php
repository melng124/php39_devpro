<?php
function MM($a, $b, $c, $d){
    $max1 = ($a > $b) ? $a : $b;
    $max2 = ($c > $d) ? $c : $d;
    $max = ($max1 > $max2) ? $max1 : $max2;
    $min1 = ($a < $b) ? $a : $b;
    $min2 = ($c < $d) ? $c : $d;
    $min = ($min1 < $min2) ? $min1 : $min2;
    echo "Với 4 số nhập vào $a, $b, $c, $d :<br/>";
    echo "<b>Max = $max, Min = $min</b><br/><br/>";
}
MM(0,0,2,6);
MM(2,4,-6,-10);
MM(0,5,5,2);
MM(5,0,5,4);
MM(2,6,-4,9);
?>