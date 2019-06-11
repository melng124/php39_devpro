<?php
/*
 * Hiển thị cấu trúc sau sử dụng PHP
*
* *
* * *
* * * *
* * * * *

 */
$n = 9;
for ($i = 1; $i <= $n; $i++) {
    for ($j = 1; $j <= $i; $j++) {
        echo ' * ';
    }
    echo "<br />";
}