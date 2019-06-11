<?php
/*
Hiển thị cấu trúc sau sử dụng PHP
*
* *
* * *
* * * *
* * * * *
* * * * *
* * * *
* * *
* *
*

 */
$n = 10;
for ($i = 1; $i <= $n; $i++) {
    if ($i <= $n / 2) {
        for ($j = 1; $j <= $i; $j++) {
            echo ' * ';
        }
        echo "<br />";
    } else {
        for ($j = $n; $j >= $i; $j--) {
            echo ' * ';
        }
        echo "<br />";
    }

}