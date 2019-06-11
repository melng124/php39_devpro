<?php
/**
 * Created by PhpStorm.
 * User: HP
 * Date: 6/11/2019
 * Time: 8:53 AM
 */

function MaxMin($number1, $number2, $number3, $number4)
{
    $max = $number1;
    $min = $number1;
    if ($max <= $number2) {
        $max = $number2;
    }
    if ($max <= $number3) {
        $max = $number3;
    }
    if ($max <= $number4) {
        $max = $number4;
    }
    echo "Max = $max";
    if ($min >= $number2) {
        $min = $number2;
    }
    if ($min >= $number3) {
        $min = $number3;
    }
    if ($min >= $number4) {
        $min = $number4;
    }
    echo "<p>Min = $min</p>";
}

MaxMin(0, 0, 2, 6);
MaxMin(2, 4, -6, -10);
MaxMin(0, 5, 5, 2);
MaxMin(5, 0, 5, 4);