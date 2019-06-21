<?php
/**
 * Created by PhpStorm.
 * User: HP
 * Date: 6/11/2019
 * Time: 8:33 AM
 */
function Tinh($a, $b, $c)
{
    if ($a == 0) {
        if ($b == 0) {
            if ($c == 0) {
                echo "<p>Phương trình đã cho có vô số nghiệm</p>";
            } else {
                echo "<p>Phương trình vô nghiệm</p>";
            }
        } else {
            $x = -$c / $b;
            echo "<p>Phương trình đã cho có 1 nghiệm $x</p>";
        }
    } else {
        $delta = pow($b, 2) - 4 * $a * $c;
        if ($delta < 0) {
            echo "<p>Phương trình đã cho vô nghiệm</p>";
        } elseif ($delta = 0) {
            $x = -$b / (2 * $a);
            echo "<p>Phương trình đã cho có nghiệm kép là :$x</p>";
        } else {
            $x1 = (-$b + sqrt($delta)) / (2 * $a);
            $x2 = (-$b - sqrt($delta)) / (2 * $a);
            echo "<p>Phương trình đã cho có nghiệm  là :$x1 và $x2</p>";
        }
    }
}

Tinh(0, 0, 2);
Tinh(2, 4, -6);
Tinh(0, 5, 5);
Tinh(5, 0, 5);