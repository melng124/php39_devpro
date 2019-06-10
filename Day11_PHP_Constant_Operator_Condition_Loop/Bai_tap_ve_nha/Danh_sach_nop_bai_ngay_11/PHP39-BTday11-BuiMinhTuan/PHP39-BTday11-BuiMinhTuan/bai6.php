<?php
$n = 5;
$x = 5;
$sum = 0;
for ($i = 1 ; $i <= $n ; $i ++){
    $sum += $x *2*$i;
}
echo "S(n) = " . $sum;