<?php
/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 6/6/2019
 * Time: 10:49 PM
 */
$n = 10;
$x = 3;
$s = 0;
echo "Cho n = $n";
echo "<br>Cho x = $x";
echo '<br>S(n) = x*2 + X*4 + x*6 + x*8 +...+ x*n = ';
for ($i = 1; $i <= $n; $i++) {
    $j = 2 * $i;
    if ($i < 10) {
        echo $x . '*' . $j . ' + ';
    } else {
        echo $x . '*' . $j;
    }
    $s += $x * $j;
}
echo " = $s";