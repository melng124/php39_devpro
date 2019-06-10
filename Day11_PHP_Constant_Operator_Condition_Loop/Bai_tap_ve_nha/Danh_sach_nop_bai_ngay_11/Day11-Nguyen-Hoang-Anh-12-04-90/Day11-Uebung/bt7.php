<?php
/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 6/5/2019
 * Time: 2:19 PM
 */

$s = 0;
echo "<b>Tổng từ 1 - 500:</b> ";
echo "<br>";
for ($i = 1; $i < 500; $i++) {
    $s += $i;
    echo "$i + ";
}
echo " 500 ";
echo "<br>";
echo "= <b style='color: red'>$s</b>";