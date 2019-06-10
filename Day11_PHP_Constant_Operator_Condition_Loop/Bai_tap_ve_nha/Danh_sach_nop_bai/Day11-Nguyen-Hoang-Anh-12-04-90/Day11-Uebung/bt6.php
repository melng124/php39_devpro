<?php
/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 6/5/2019
 * Time: 2:08 PM
 */

$n = 5;
echo "với n = $n";
echo "<br>";
echo "Tổng S(n) có dạng: ";
for ($i = 1; $i < $n; $i++) {
    echo "x * " . 2 * $i . " + ";
}
echo "x * " . 2 * $n;