<?php
/**
 * Created by PhpStorm.
 * User: Dell
 * Date: 5/6/2019
 * Time: 12:33 PM
 */
$n = 10; //gán giá trị cho n
$tong = 0;
$x = 2;
for ($i = 1; $i < $n; $i++) {
    $tong += ($x * 2 * $i);
}
echo "Với x = $x" . "<br>";
echo "Tổng = " . $tong;
?>