<?php
/**
 * Created by PhpStorm.
 * User: HP
 * Date: 6/9/2019
 * Time: 8:50 PM
 */
function check($number)
{
    $t = 1;
    if ($number >= 0) {
        for ($i = 1; $i <= $number; $i++) {

            $t *= $i;

        }
        echo "<p>$t</p>";

    } else {
        echo "<p>Không tính giai thừa trên số âm</p>";
    }
}

check(-5);
check(0);
check(5);
check(8);