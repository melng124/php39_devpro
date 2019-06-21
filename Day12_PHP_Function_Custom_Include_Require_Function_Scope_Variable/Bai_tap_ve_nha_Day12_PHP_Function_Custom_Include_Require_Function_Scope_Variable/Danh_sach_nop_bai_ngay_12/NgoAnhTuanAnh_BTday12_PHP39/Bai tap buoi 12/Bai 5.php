<?php
/**
 * Created by PhpStorm.
 * User: Dell
 * Date: 9/6/2019
 * Time: 3:52 PM
 */
function equation2($a, $b, $c)
{
    $delta = ($b * $b) - (4 * $a * $c);
    if ($a == 0) {
        echo "Phương trình có dạng: " . $b . "x+" . $c . "=0" . "<br>";
        if ($b == 0) {
            if ($c != 0) {
                echo "phương trình vô nghiệm";
            } else {
                echo "Phương trình có vô số nghiệm";
            }
        } else {
            $x = -$c / $b;
            echo "Phương trình có nghiệm x= " . $x;
        }
    } else if ($delta > 0) {
        $x1 = -$b + sqrt($delta) / 2 * $a;
        $x2 = -$b - sqrt($delta) / 2 * $a;
        echo "Phương trình có nghiệm x1 = " . $x1;
        echo "Phương trình có nghiệm x2 = " . $x2;
    } else if ($delta == 0) {
        $x3 = -$b / 2 * $a;
        echo "phương trình có nghiệm x = " . $x3;
    } else {
        echo "Phương trình vô nghiệm";
    }

}

//equation2(5, 0, 5);
//equation2(0, 0, 2);
//equation2(2, 4, -6);
equation2(0, 5, 5);
?>