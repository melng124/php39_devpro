<?php
/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 6/10/2019
 * Time: 5:03 PM
 */
function PtBacHai($num1, $num2, $num3)
{
    echo '<p style="font-weight: bold; font-size: 20px">Giải phương trình bậc hai '.$num1.'x<sup>2</sup> + '.$num2.'x + '.$num3.' = 0';
    if ($num1 == 0) {
        if ($num2 == 0 && $num3 == 0) {
            return '<p>Phương trình vô số nghiệm</p>';
        } elseif ($num2 != 0 && $num3 == 0) {
            return '<p>Phương trình có nghiệm x = 0</p>';
        } elseif ($num2 == 0 && $num3 != 0) {
            return '<p>Phương trình vô nghiệm</p>';
        } else {
            return '<p>Phương trình có nghiệm x = ' . -$num3 / $num2 . '</p>';
        }
    } else {
        $delta = $num2 * $num2 - 4 * $num1 * $num3;
        if ($delta == 0) {
            return '<p>Phương trình có nghiệm kép = ' . -$num2 / (2 * $num1) . '</p>';

        } elseif ($delta < 0) {
            return '<p>Phương trình vô nghiệm</p>';
        } else {
            return '<p>Phương trình có 2 nghiệm phân biệt là' . '<br>x1 = ' . (-$num2 - sqrt($delta)) / (2 * $num1) . '<br>x2 = ' . (-$num2 + sqrt($delta)) / (2 * $num1) . '</p>';
        }
    }
}
echo PtBacHai(0,0,2);
echo PtBacHai(2,4,-6);
echo PtBacHai(0,5,5);
echo PtBacHai(5,0,5);