<?php
/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 11/6/2019
 * Time: 11:58 AM
 */
function check($a,$b,$c)
{
    if ($a == 0) {
        if ($b == 0) {
            echo("Phương trình vô nghiệm!");
        } else {
            echo("Phương trình có một nghiệm: " . "x = " . (-$c / $b));
        }
        return;
    }
// tính delta
    $delta = $b * $b - 4 * $a * $c;
    $x1 = "";
    $x2 = "";
// tính nghiệm
    if ($delta > 0) {
        $x1 = (-$b + sqrt($delta)) / (2 * $a);
        $x2 = (-$b - sqrt($delta)) / (2 * $a);
        echo("Phương trình có 2 nghiệm là: " . "x1 = " . $x1 . " và x2 = " . $x2);
    } else if ($delta == 0) {
        $x1 = (-$b / (2 * $a));
        echo("Phương trình có nghiệm kép: x1 = x2 = " . $x1);
    } else {
        echo("Phương trình vô nghiệm!");
    }
}
check(4,5,6);
echo "<br/>";check(0,0,2);
echo "<br/>";check(2,4,-6);
echo "<br/>";check(0,5,5);
echo "<br/>";check(5,0,5);
