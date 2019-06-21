<?php
/**
 * Created by PhpStorm.
 * User: HP
 * Date: 6/11/2019
 * Time: 8:24 AM
 */
function Tinh($a, $b)
{
    if ($a == 0) {
        if ($b == 0) {
            echo "<p>Phương trình đã cho có vô số nghiệm</p>";
        } else {
            echo "<p>Phương trình đã cho vô nghiệm</p>";
        }
    } else {
        $x = -$b / $a;
        echo "<p>Phương trính $a*x+$b=0 có nghiệm là : $x</p>";
    }
}

Tinh(0, 5);
Tinh(2, -2);
Tinh(0, 0);