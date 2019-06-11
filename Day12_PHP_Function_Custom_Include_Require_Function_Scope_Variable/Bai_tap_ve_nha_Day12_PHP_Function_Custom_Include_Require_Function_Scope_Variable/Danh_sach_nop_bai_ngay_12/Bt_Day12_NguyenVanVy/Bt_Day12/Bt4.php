<?php
/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 6/10/2019
 * Time: 4:44 PM
 */
function PtBacNhat($num1, $num2)
{
    echo '<p style="font-weight: bold; font-size: 18px">Giải phương trình bậc nhất '.$num1.'x + '.$num2.' = 0';
    if ($num1 == 0 && $num2 == 0) {
        return '<p>Phương trình vô số nghiệm</p>';
    } elseif ($num1 != 0 && $num2 == 0) {
        return '<p>Phương trình có nghiệm x = 0</p>';
    } elseif ($num1 == 0 && $num2 != 0) {
        return '<p>Phương trình vô nghiệm</p>';
    } else {
        return '<p>Phương trình có nghiệm x = ' . -$num2 / $num1 . '</p>';
    }
}
echo PtBacNhat(0,5);
echo PtBacNhat(2,-2);
echo PtBacNhat(0,0);