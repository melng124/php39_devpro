<?php
/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 6/5/2019
 * Time: 12:27 PM
 */
$n = 10;
$s = 0;
echo "Cho n = $n";
echo '<br>S(n) = 1 + 1/2 + 1/3 + 1/4 +...+ 1/n = ';
for ($i = 1; $i <= $n; $i++) {
    $s += 1 / $i;
    if ($i < 10) {
        echo '1/' . $i . ' + ';
    } else {
        echo '1/' . $i;
    }
}
echo " = $s";