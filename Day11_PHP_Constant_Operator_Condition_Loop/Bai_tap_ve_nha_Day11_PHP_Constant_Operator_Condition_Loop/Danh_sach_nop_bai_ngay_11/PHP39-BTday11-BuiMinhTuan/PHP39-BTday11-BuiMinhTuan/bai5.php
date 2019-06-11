<?php
$n = 9;
$sum = 0;
for ( $i = 1; $i <= $n ; $i ++){
    $sum += 1/$i;
}
echo " S(n) = " . $sum;