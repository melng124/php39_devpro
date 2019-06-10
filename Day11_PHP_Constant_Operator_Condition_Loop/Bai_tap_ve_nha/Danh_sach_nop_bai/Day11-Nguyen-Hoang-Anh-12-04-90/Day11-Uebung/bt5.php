<?php
/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 6/5/2019
 * Time: 1:43 PM
 */

$n = 2;
$S = 0;
echo "Với n = $n";
echo "<br>";
echo "Tổng S(n) có dạng: ";
for ($i = 1; $i < $n; $i++) {
    $S += 1 / $i;
    echo "1 / $i" . " + ";
}
echo "1 / $n" . " = " . ($S + (1 / $n));